<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommunityPostResource;
use App\Models\Community;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubredditController extends Controller
{
	public function show($slug)
	{
		if (!Community::where('slug', $slug)->first()) {
			return abort(404);
		}

		$subreddit = Community::where('slug', $slug)->firstOrFail();
		$posts = CommunityPostResource::collection($subreddit->posts()->with('user')->get());
		$communities = Community::all();

		return Inertia::render(
			'Frontend/Subreddit/Index',
			compact('subreddit', 'posts', 'communities')
		);
	}
}
