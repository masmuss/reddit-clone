<script setup>
import { ref, reactive, defineProps } from "vue";
import Button from "@/Components/Button.vue";

defineProps({
	community: Object,
});
</script>

<template>
	<div class="px-3 py-2">
		<div class="flex">
			<div
				class="mr-2 flex h-8 w-8 items-center justify-center rounded-full bg-slate-500 text-white"
			>
				r/{{ community.slug.substring(0, 1) }}
			</div>
			<div class="flex flex-col font-medium">
				<a
					:href="route('subreddit.index', community.slug)"
					class="text-xs text-black"
				>
					r/{{ community.slug }}
				</a>
				<span class="text-xxs">1.000 subscribers</span>
			</div>
			<div class="ml-auto flex">
				<button
					class="bg-blue-dark ml-auto rounded px-4 text-xs font-semibold text-white"
				>
					SUBSCRIBE
				</button>
			</div>
		</div>
	</div>
</template>
