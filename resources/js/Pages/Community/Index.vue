<script setup>
import Authenticated from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
	communities: Object
});

</script>

<template>

	<Head title="Communities" />

	<Authenticated>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Communities
			</h2>
		</template>

		<div class="py-12">
			<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
				<div class="py-5 flex justify-end">
					<Link :href="route('communities.create')">
					<Button>
						Create new community
					</Button>
					</Link>
				</div>
				<table class="w-full">
					<thead class="border-b bg-gray-500">
						<tr>
							<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
								#
							</th>
							<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
								Creator
							</th>
							<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
								Name
							</th>
							<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
								Description
							</th>
							<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
								Slug
							</th>
							<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">

							</th>
						</tr>
					</thead>
					<tbody v-for="community in communities" :key="community.slug">
						<tr class="bg-white border-b">
							<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
								{{ community.id }}
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
								{{ community.user.name }}
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
								{{ community.name }}
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
								{{ community.description }}
							</td>
							<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
								{{ community.slug }}
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
								<Link :href="route('communities.show', { community: community.slug })">
								<Button>
									View
								</Button>
								</Link>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</Authenticated>
</template>

