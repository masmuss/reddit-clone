<script setup>
import BreezeButton from "@/Components/Button.vue";
import BreezeCheckbox from "@/Components/Checkbox.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeInputError from "@/Components/InputError.vue";
import BreezeLabel from "@/Components/Label.vue";
import { Head, Link, useForm } from "@inertiajs/inertia-vue3";
import { ref } from "vue";

defineProps({
	canResetPassword: Boolean,
	status: String,
});

const form = useForm({
	login: "",
	password: "",
	remember: false,
});

let formStep = ref(1);

const nextStep = () => {
	formStep.value++;
};

const prevStep = () => {
	formStep.value--;
};

const submit = () => {
	form.post(route("login"), {
		onFinish: () => {
			form.reset("password"), (formStep.value = 1);
		},
	});
};
</script>

<template>
	<BreezeGuestLayout>
		<Head title="Log in" />

		<div v-if="status" class="mb-4 text-sm font-medium text-green-600">
			{{ status }}
		</div>

		<form>
			<div v-if="formStep == 1">
				<BreezeLabel for="login" value="Email or Username" />
				<BreezeInput
					id="login"
					type="text"
					class="mt-1 block w-full"
					v-model="form.login"
					autofocus
					autocomplete="username"
				/>
				<BreezeInputError class="mt-2" :message="form.errors.login" />
			</div>

			<div v-if="formStep == 2">
				<div class="mt-4">
					<BreezeLabel for="password" value="Password" />
					<BreezeInput
						id="password"
						type="password"
						class="mt-1 block w-full"
						v-model="form.password"
						autocomplete="current-password"
					/>
					<BreezeInputError class="mt-2" :message="form.errors.password" />
				</div>

				<div class="mt-4 block">
					<label class="flex items-center">
						<BreezeCheckbox
							name="remember"
							v-model:checked="form.remember"
						/>
						<span class="ml-2 text-sm text-gray-600">Remember me</span>
					</label>
				</div>
			</div>

			<div>
				<div v-if="formStep == 1" class="flex justify-end">
					<BreezeButton
						class="mt-4"
						:disabled="form.processing"
						@click="nextStep"
						type="button"
					>
						Next
					</BreezeButton>
				</div>

				<div v-if="formStep == 2" class="mt-4 flex justify-between">
					<BreezeButton
						type="button"
						:disabled="form.processing"
						@click="prevStep"
					>
						Previous
					</BreezeButton>
					<BreezeButton
						type="button"
						:class="{ 'opacity-25': form.processing }"
						:disabled="form.processing"
						@click="submit"
					>
						Log in
					</BreezeButton>
				</div>
			</div>
		</form>
	</BreezeGuestLayout>
</template>
