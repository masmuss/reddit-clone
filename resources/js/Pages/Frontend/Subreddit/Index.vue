<script setup>
import { ref, reactive, defineProps, watch } from "vue";
import FrontendLayout from "@/Layouts/Frontend.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
	subreddit: {
		type: Object,
		required: true,
	},
	posts: Object,
});

const timeAgo = (date) => {
	const seconds = Math.floor((new Date() - new Date(date)) / 1000);

	let interval = Math.floor(seconds / 31536000);

	if (interval > 1) {
		return interval + " years";
	}
	interval = Math.floor(seconds / 2592000);
	if (interval > 1) {
		return interval + " months";
	}
	interval = Math.floor(seconds / 86400);
	if (interval > 1) {
		return interval + " days";
	}
	interval = Math.floor(seconds / 3600);
	if (interval > 1) {
		return interval + " hours";
	}
	interval = Math.floor(seconds / 60);
	if (interval > 1) {
		return interval + " minutes";
	}
	return Math.floor(seconds) + " seconds";
};

</script>

<template>
	<FrontendLayout>
		<Head :title="subreddit.name" />
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

		<div v-for="post in posts" :key="post.slug">
			<!-- make a card component using tailwind -->
			<div class="mb-4 rounded-lg bg-white p-4 shadow-lg">
				<div class="flex justify-between">
					<div class="flex">
						<div>
							<h3 class="text-lg font-semibold text-gray-800">
								{{ post.title }}
							</h3>
							<p class="text-sm text-gray-600">
								Posted by
								<span class="font-semibold text-gray-800">
									{{ post.user.name }}
								</span>
								{{ timeAgo(post.created_at) }} ago
							</p>
						</div>
					</div>
					<div>
						<span class="text-sm text-gray-600">
							{{ post.comments_count }} comments
						</span>
					</div>
				</div>
			</div>
		</div>
	</FrontendLayout>
</template>
