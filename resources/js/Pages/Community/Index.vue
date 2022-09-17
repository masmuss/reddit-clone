<script setup>
import Authenticated from "@/Layouts/Authenticated.vue";
import { Head } from "@inertiajs/inertia-vue3";
import Button from "@/Components/Button.vue";
import { Link } from "@inertiajs/inertia-vue3";
import Pagination from "@/Components/Pagination.vue";

defineProps({
	communities: Object,
});
</script>

<template>
	<Head title="Communities" />

	<Authenticated>
		<template #header>
			<h2 class="text-xl font-semibold leading-tight text-gray-800">
				Communities
			</h2>
		</template>

		<div class="py-12">
			<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
				<div class="flex justify-end py-5">
					<Link :href="route('communities.create')">
						<Button> Create new community </Button>
					</Link>
				</div>
				<table class="w-full">
					<thead class="border-b bg-gray-500">
						<tr>
							<th
								scope="col"
								class="px-6 py-4 text-left text-sm font-medium text-white"
							>
								#
							</th>
							<th
								scope="col"
								class="px-6 py-4 text-left text-sm font-medium text-white"
							>
								Name
							</th>
							<th
								scope="col"
								class="px-6 py-4 text-left text-sm font-medium text-white"
							>
								Description
							</th>
							<th
								scope="col"
								class="px-6 py-4 text-left text-sm font-medium text-white"
							>
								Slug
							</th>
							<th
								scope="col"
								class="px-6 py-4 text-left text-sm font-medium text-white"
							></th>
						</tr>
					</thead>
					<tbody
						v-for="community in communities.data"
						:key="community.slug"
					>
						<tr class="border-b bg-white">
							<td
								class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900"
							>
								{{ community.id }}
							</td>
							<td
								class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900"
							>
								{{ community.name }}
							</td>
							<td
								class="whitespace-wrap px-6 py-4 text-sm font-light text-gray-900"
							>
								{{ community.description }}
							</td>
							<td
								class="whitespace-nowrap px-6 py-4 text-sm font-light text-gray-900"
							>
								<a
									:href="route('subreddit.index', community.slug)"
									class="text-blue-400 underline"
									target="_blank"
									>{{ community.slug }}</a
								>
							</td>
							<td
								class="space-x-2 whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900"
							>
								<Link
									:href="
										route('communities.edit', {
											community: community.id,
										})
									"
								>
									<Button> Edit </Button>
								</Link>
								<Link
									:href="
										route('communities.destroy', {
											community: community.id,
										})
									"
									method="delete"
									as="button"
									type="button"
								>
									<Button> Delete </Button>
								</Link>
							</td>
						</tr>
					</tbody>
				</table>

				<Pagination :links="communities.links" />
			</div>
		</div>
	</Authenticated>
</template>
