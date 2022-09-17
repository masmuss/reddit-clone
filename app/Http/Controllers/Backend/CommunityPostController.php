<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Community;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Illuminate\Support\Str;

class CommunityPostController extends Controller
{
	public function create(Community $community)
	{
		return Inertia::render('Community/Post/Create', compact('community'));
	}

	public function store(StorePostRequest $request, Community $community)
	{
		if ($request->validated()) {
			$community->posts()->create([
				'user_id' => auth()->id(),
				'title' => $request->title,
				'slug' => Str::slug($request->title),
				'url' => $request->url,
				'description' => $request->description,
			]);
		}
		return Redirect::route('subreddit.index', $community->slug);
	}
}
