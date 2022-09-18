<script setup>
import { defineProps } from "vue";
import { Link } from "@inertiajs/inertia-vue3";
import CommunityCard from "@/Components/CommunityCard.vue";

defineProps({
	subreddit: Object,
	communities: Object,
});
</script>

<template>
	<div class="py-2">
		<div class="mb-4 rounded bg-white">
			<div class="p-3">
				<div
					class="-m-3 h-8 bg-cover bg-no-repeat"
					style="
						background-image: url('https://www.redditstatic.com/desktop2x/img/id-cards/banner@2x.png');
					"
				></div>
				<div>
					<div class="inline-flex items-center">
						<img
							src="https://www.redditstatic.com/desktop2x/img/id-cards/snoo-home@2x.png"
							class="h-16"
						/>
						<span class="ml-4 mt-6 text-lg"
							>r/{{ subreddit.name.toLowerCase() }}</span
						>
					</div>
					<p class="mb-3 text-sm font-normal leading-normal">
						{{ subreddit.description }}
					</p>
					<Link
						v-if="$page.props.auth.authenticated"
						:href="route('community.post.create', subreddit.slug)"
						class="block w-full rounded bg-blue-700 px-4 py-2 text-center text-sm font-semibold text-white"
					>
						CREATE POST
					</Link>
				</div>
			</div>
		</div>

		<div class="mb-4 rounded bg-white">
			<div class="w-full p-3 text-xxs font-semibold">
				TRENDING COMMUNITIES
			</div>
			<div class="pb-4">
				<CommunityCard
					v-for="community in communities"
					:key="community.id"
					:community="community"
				/>
			</div>
		</div>
		<div class="mb-4 rounded bg-white">
			<div class="p-3">
				<div class="flex justify-between">
					<div>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>About</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Careers</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Press</a
						>
					</div>
					<div>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Advertise</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Blog</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Help</a
						>
					</div>
					<div>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>The Reddit App</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Reddit Coins</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Reddit Premium</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Reddit Gifts</a
						>
					</div>
				</div>
				<div class="mt-6 text-center">
					<p class="text-xs font-medium leading-tight text-black">
						<a href="#" class="text-black no-underline">Content Policy</a>
						|
						<a href="#" class="text-black no-underline">Privacy Policy</a>
					</p>
					<p class="text-xs font-medium leading-tight text-black">
						<a href="#" class="text-black no-underline">User Agreement</a>
						|
						<a href="#" class="text-black no-underline">Mod Policy</a>
					</p>
					<p class="text-xs font-medium leading-tight text-black">
						© 2018 Reddit, Inc. All rights reserved
					</p>
				</div>
			</div>
		</div>
	</div>
</template>
