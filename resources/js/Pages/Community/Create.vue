<script setup>
import Authenticated from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/inertia-vue3';
import Button from '@/Components/Button.vue';
import Input from '@/Components/Input.vue';
import InputError from '@/Components/InputError.vue';
import Label from '@/Components/Label.vue';

defineProps({
	errors: Object
});

const form = useForm({
	name: null,
	description: null,
});

const submit = () => {
	form.post(route('communities.store'), {
		onFinish: () => form.reset('name', 'description'),
	});
};

</script>

<template>

	<Head title="Create Community" />

	<Authenticated>
		<template #header>
			<h2 class="font-semibold text-xl text-gray-800 leading-tight">
				Create New Community
			</h2>
		</template>

		<div class="py-12">
			<div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
				<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
					<div class="p-6 bg-white border-b border-gray-200">
						<form @submit.prevent="submit">
							<div>
								<Label for="name" value="Name" />
								<Input id="name" type="text" v-model="form.name" class="mt-1 block w-full" />
								<InputError :message="errors.name" class="mt-2" />
							</div>
							<div class="mt-2">
								<Label for="description" value="Description" />
								<Input id="description" type="text" v-model="form.description" class="mt-1 block w-full" />
								<InputError :message="errors.description" class="mt-2" />
							</div>
							<div class="mt-2">
								<Button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">Add</Button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</Authenticated>
</template>

