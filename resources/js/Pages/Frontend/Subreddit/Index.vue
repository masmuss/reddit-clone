<script setup>
import { defineProps } from "vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import PostCard from "@/Components/PostCard.vue";
import Sidebar from "@/Components/Sidebar.vue";
import Pagination from "@/Components/Pagination.vue";

const props = defineProps({
	subreddit: {
		type: Object,
		required: true,
	},
	posts: Object,
	communities: Object,
});
</script>

<template>
	<FrontendLayout>
		<Head :title="subreddit.name" />

		<template #header>
			<div>
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
					r/{{ subreddit.slug }}
				</h2>
			</div>
		</template>

		<main class="container mx-auto py-5">
			<div class="mx-auto flex w-[960px]">
				<section class="w-2/3">
					<PostCard
						v-for="post in posts.data"
						:post="post"
						:subreddit="subreddit"
					/>
					<Pagination :links="posts.meta.links" />
				</section>
				<section class="ml-6 w-1/3">
					<Sidebar :subreddit="subreddit" :communities="communities" />
				</section>
			</div>
		</main>
	</FrontendLayout>
</template>
