<script setup>
import { defineProps } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import PostCard from "@/Components/PostCard.vue";
import Sidebar from "@/Components/Sidebar.vue";

const props = defineProps({
	subreddit: {
		type: Object,
		required: true,
	},
	posts: Object,
});
</script>

<template>
	<FrontendLayout>
		<Head :title="subreddit.name" />

		<template #header>
			<div>
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
					r/{{ subreddit.name }}
				</h2>
			</div>
		</template>

		<div class="flex justify-between py-10">
			<h2 class="text-xl font-semibold leading-tight text-gray-800">
				{{ subreddit.name }}
			</h2>
			<Link
				v-if="$page.props.auth.authenticated"
				:href="route('community.post.create', subreddit.slug)"
				class="rounded bg-slate-800 px-4 py-2 text-slate-100 shadow-sm transition-all hover:bg-slate-600"
			>
				Create Post
			</Link>
		</div>

		<main class="container mx-auto">
			<div class="mx-auto flex w-[960px]">
				<section class="w-2/3">
					<PostCard
						v-for="post in posts.data"
						:post="post"
						:subreddit="subreddit"
					/>
				</section>
				<section class="ml-5 w-1/3">
					<Sidebar />
				</section>
			</div>
		</main>
	</FrontendLayout>
</template>
