<script setup>
import { defineProps } from "vue";

const props = defineProps({
	subreddit: {
		type: Object,
		required: true,
	},
	post: Object,
});
</script>

<template>
	<div class="py-2">
		<div
			class="shadow-m flex max-w-3xl cursor-pointer gap-4 rounded-md border border-gray-200 bg-white p-3 hover:border-gray-500"
		>
			<div class="flex flex-col items-start gap-1">
				<button class="text-xs">
					<svg
						class="w-5 fill-current text-gray-400"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
					>
						<path d="M7 10v8h6v-8h5l-8-8-8 8h5z" />
					</svg>
				</button>
				<span class="text-xs font-semibold">20k</span>
				<button class="text-xs">
					<svg
						class="w-5 fill-current text-gray-400"
						xmlns="http://www.w3.org/2000/svg"
						viewBox="0 0 20 20"
					>
						<path d="M7 10V2h6v8h5l-8 8-8-8h5z" />
					</svg>
				</button>
			</div>
			<div class="flex w-full flex-col justify-between">
				<div class="mb-4">
					<div class="mb-2 flex items-center text-xs">
						<div
							class="mr-1 flex h-5 w-5 items-center justify-center rounded-full bg-blue-500 text-white"
						>
							r/{{ subreddit.slug.substring(0, 1) }}
						</div>
						<a
							href="#"
							class="flex items-center font-semibold no-underline hover:underline"
						>
							<span class="font-semibold">r/{{ subreddit.name }}</span>
						</a>
						<span class="mx-1 text-xxs text-gray-400">•</span>
						<span class="text-gray-500">Posted by</span>
						<a
							href="#"
							class="mx-1 text-gray-500 no-underline hover:underline"
							>u/{{ post.user.name }}</a
						>
						<span class="text-gray-500">{{ post.created_at }}</span>
					</div>
					<div>
						<h2 class="mb-1 text-lg font-medium">
							{{ post.title }}
						</h2>
					</div>
				</div>
				<div class="inline-flex items-center gap-2">
					<div class="flex text-gray-400">
						<svg
							class="w-4 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 20 20"
						>
							<path
								d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"
							/>
						</svg>
						<span class="text-gray ml-2 text-xs font-semibold"
							>3k Comments</span
						>
					</div>
					<div class="ml-2 flex text-gray-400">
						<svg
							class="w-4 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 20 20"
						>
							<path
								d="M5.08 12.16A2.99 2.99 0 0 1 0 10a3 3 0 0 1 5.08-2.16l8.94-4.47a3 3 0 1 1 .9 1.79L5.98 9.63a3.03 3.03 0 0 1 0 .74l8.94 4.47A2.99 2.99 0 0 1 20 17a3 3 0 1 1-5.98-.37l-8.94-4.47z"
							/>
						</svg>
						<span class="text-gray ml-2 text-xs font-semibold"
							>Share</span
						>
					</div>
					<div class="ml-2 flex text-gray-400">
						<svg
							class="w-4 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 20 20"
						>
							<path
								d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"
							/>
						</svg>
						<span class="text-gray ml-2 text-xs font-semibold">Save</span>
					</div>
					<div class="ml-2 flex rotate-90 text-gray-400">
						<svg
							class="text-gray w-4 fill-current"
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 20 20"
						>
							<path
								d="M10 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0-6a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 12a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"
							/>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
