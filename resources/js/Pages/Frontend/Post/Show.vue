<script setup>
import { defineProps } from "vue";
import FrontendLayout from "@/Layouts/Frontend.vue";

defineProps({
	post: {
		type: Object,
		required: true,
	},
	community: {
		type: Object,
		required: true,
	},
});
</script>

<template>
	<FrontendLayout>
		<template #header>
			<div>
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
					r/{{ community.slug }}
				</h2>
			</div>
		</template>

		{{ post }}
		{{ subreddit }}
	</FrontendLayout>
</template>
