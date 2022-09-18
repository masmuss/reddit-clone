<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";

defineProps({
	links: [],
});
</script>

<template>
	<div class="mt-2 inline-flex -space-x-px">
		<template v-for="(link, key) in links" :key="key">
			<div
				v-if="link.url === null"
				v-html="link.label"
				class="ml-0 border border-gray-300 bg-white py-2 px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
			></div>
			<Link
				v-else
				:href="link.url"
				class="border border-gray-300 bg-white py-2 px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
			>
				{{ link.label }}</Link
			>
		</template>
	</div>
</template>
