<script setup>
import FrontendLayout from "@/Layouts/Frontend.vue";
import { Head } from "@inertiajs/inertia-vue3";
import { useForm } from "@inertiajs/inertia-vue3";
import Button from "@/Components/Button.vue";
import Input from "@/Components/Input.vue";
import InputError from "@/Components/InputError.vue";
import Label from "@/Components/Label.vue";

const props = defineProps({
	community: Object,
	errors: Object,
});

const form = useForm({
	title: null,
	url: null,
	description: null,
});

const submit = () => {
	form.post(route("community.post.store", props.community.slug), {
		onFinish: () => form.reset("title", "url", "description"),
	});
};
</script>

<template>
	<Head :title="`Create post for ${community.name}`" />

	<FrontendLayout>
		<template #header>
			<h2 class="text-xl font-semibold leading-tight text-gray-800">
				Create New Post for {{ community.name }} Community
			</h2>
		</template>

		<div class="py-12">
			<div class="mx-auto max-w-xl sm:px-6 lg:px-8">
				<div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
					<div class="border-b border-gray-200 bg-white p-6">
						<form @submit.prevent="submit">
							<div>
								<Label for="title" value="Title" />
								<Input
									id="title"
									type="text"
									v-model="form.title"
									class="mt-1 block w-full"
								/>
								<InputError :message="errors.title" class="mt-2" />
							</div>
							<div class="mt-2">
								<Label for="url" value="URL" />
								<Input
									id="url"
									type="url"
									v-model="form.url"
									class="mt-1 block w-full"
								/>
								<InputError :message="errors.url" class="mt-2" />
							</div>
							<div class="mt-2">
								<Label for="description" value="Description" />
								<Input
									id="description"
									type="text"
									v-model="form.description"
									class="mt-1 block w-full"
								/>
								<InputError
									:message="errors.description"
									class="mt-2"
								/>
							</div>
							<div class="mt-2 flex justify-end">
								<Button
									type="submit"
									:class="{ 'opacity-25': form.processing }"
									:disabled="form.processing"
								>
									Add
								</Button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</FrontendLayout>
</template>
