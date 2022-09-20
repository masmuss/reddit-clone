<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use App\Models\Post;
use Inertia\Inertia;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
	public function show(Community $community, Post $post)
	{
		$post = new PostResource($post);
		return Inertia::render(
			'Frontend/Post/Show',
			compact('post', 'community')
		);
	}
}
