<script setup>
import { defineProps } from "vue";
import FrontendLayout from "@/Layouts/Frontend.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

const props = defineProps({
	post: {
		type: Object,
		required: true,
	},
	community: {
		type: Object,
		required: true,
	},
});

let post = ref(props.post.data);
</script>

<template>
	<FrontendLayout>
		<Head :title="post.title" />

		<template #header>
			<div>
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
					r/{{ post.community.slug }}
				</h2>
			</div>
		</template>

		<main class="container mx-auto py-5">
			<div class="mx-auto flex w-[960px]">
				<section class="w-2/3">
					<div class="py-2">
						<div
							class="shadow-m flex max-w-3xl cursor-pointer gap-4 rounded-md border border-gray-200 bg-white p-3"
						>
							<div class="flex w-full flex-col justify-between">
								<div class="mb-6">
									<div class="mb-2 flex items-center text-xs">
										<div
											class="mr-1 flex h-5 w-5 items-center justify-center rounded-full bg-blue-500 text-white"
										>
											r/{{ post.community.slug.substring(0, 1) }}
										</div>
										<a
											href="#"
											class="flex items-center font-semibold no-underline hover:underline"
										>
											<span class="font-semibold"
												>r/{{ post.community.slug }}</span
											>
										</a>
										<span class="mx-1 text-xxs text-gray-400">•</span>
										<span class="text-gray-500">Posted by</span>
										<a
											href="#"
											class="mx-1 text-gray-500 no-underline hover:underline"
											>u/{{
										}}</a>
										<span class="text-gray-500">{{
											post.user.name
										}}</span>
									</div>
									<div>
										<h2 class="mb-1 text-lg font-medium">
											{{ post.title }}
										</h2>
									</div>
								</div>
								<div v-html="post.description"></div>
							</div>
						</div>
					</div>
				</section>
				<section class="ml-6 w-1/3">
					<Sidebar :subreddit="subreddit" />
				</section>
			</div>
		</main>
	</FrontendLayout>
</template>
