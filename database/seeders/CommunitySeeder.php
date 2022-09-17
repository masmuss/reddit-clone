<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\User;
use Illuminate\Database\Seeder;

class CommunitySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$communities = collect([
			[
				'name' => 'Laravel',
				'slug' => 'laravel',
				'description' => 'Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
			],
			[
				'name' => 'Vue',
				'slug' => 'vue',
				'description' => 'Vue.js is an open-source Model-view-viewmodel JavaScript framework for building user interfaces and single-page applications.',
			],
			[
				'name' => 'React',
				'slug' => 'react',
				'description' => 'React is a JavaScript library for building user interfaces.',
			],
			[
				'name' => 'Svelte',
				'slug' => 'svelte',
				'description' => 'Svelte is a radical new approach to building user interfaces.',
			],
			[
				'name' => 'Tailwind CSS',
				'slug' => 'tailwind-css',
				'description' => 'A utility-first CSS framework for rapidly building custom user interfaces.',
			],
			[
				'name' => 'Bootstrap',
				'slug' => 'bootstrap',
				'description' => 'Bootstrap is an open source toolkit for developing with HTML, CSS, and JS.',
			],
			[
				'name' => 'Tailwind UI',
				'slug' => 'tailwind-ui',
				'description' => 'Ready-to-use, fully responsive, beautifully designed UI components built with Tailwind CSS.',
			],
			[
				'name' => 'Laravel Livewire',
				'slug' => 'laravel-livewire',
				'description' => 'Livewire is a full-stack framework for Laravel that takes the pain out of building dynamic UIs.',
			],
			[
				'name' => 'Alpine JS',
				'slug' => 'alpine-js',
				'description' => 'A rugged, minimal framework for composing JavaScript behavior in your markup.',
			],
		]);

		$communities->each(function ($community) {
			$community_model = new Community();
			$community_model->user_id = User::first()->id;
			$community_model->name = $community['name'];
			$community_model->slug = $community['slug'];
			$community_model->description = $community['description'];
			$community_model->save();
		});
	}
}
