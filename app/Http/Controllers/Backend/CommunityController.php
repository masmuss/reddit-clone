<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommunityStoreRequest;
use App\Models\Community;
use Inertia\Inertia;
use Illuminate\Support\Str;

class CommunityController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return Inertia::render('Community/Index', [
			'communities' => Community::paginate(10)->through(fn ($community) => [
				'id' => $community->id,
				'name' => $community->name,
				'description' => $community->description,
				'slug' => $community->slug,
			]),
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return Inertia::render('Community/Create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(CommunityStoreRequest $request)
	{
		if ($request->validated()) {
			Community::create([
				'user_id' => auth()->id(),
				'name' => $request->name,
				'description' => $request->description,
				'slug' => Str::slug($request->name),
			]);

			return to_route('communities.index')
				->with('message', 'Community created successfully.');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Community $community)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Community $community)
	{
		return Inertia::render('Community/Edit', [
			'community' => $community,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  Community  $community
	 * @return \Illuminate\Http\Response
	 */
	public function update(CommunityStoreRequest $request, Community $community)
	{
		if ($request->validated()) {
			$community->update([
				'name' => $request->name,
				'slug' => Str::slug($request->name),
				'description' => $request->description,
			]);

			return to_route('communities.index')
				->with('message', 'Community updated successfully.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Community  $community
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Community $community)
	{
		$community->delete();
		return back()
			->with('message', 'Community deleted successfully.');
	}
}
