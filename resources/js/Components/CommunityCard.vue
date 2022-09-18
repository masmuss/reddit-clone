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
					class="text-xs text-black hover:underline"
				>
					r/{{ community.slug }}
				</a>
				<span class="text-xxs">1.000 subscribers</span>
			</div>
			<div class="ml-auto flex">
				<button
					class="ml-auto rounded-full bg-slate-700 px-9 text-sm font-semibold text-white hover:bg-slate-600"
				>
					Join
				</button>
			</div>
		</div>
	</div>
</template>
