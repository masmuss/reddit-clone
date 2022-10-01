<script setup>
import { ref } from "vue";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
	<div>
		<div class="min-h-screen bg-gray-200">
			<nav class="border-b border-gray-100 bg-white">
				<!-- Primary Navigation Menu -->
				<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
					<div class="flex h-16 justify-between">
						<div class="flex">
							<!-- Logo -->
							<div class="flex shrink-0 items-center">
								<Link :href="route('dashboard')">
									<BreezeApplicationLogo class="block h-9 w-auto" />
								</Link>
							</div>
						</div>

						<div class="hidden sm:ml-6 sm:flex sm:items-center">
							<Link
								v-if="$page.props.auth.user"
								:href="route('dashboard')"
								class="text-sm text-gray-700 underline dark:text-gray-500"
								>{{ $page.props.auth.user.name }}</Link
							>

							<template v-else>
								<Link
									:href="route('login')"
									class="text-sm text-gray-700 underline dark:text-gray-500"
									>Log in</Link
								>

								<Link
									v-if="canRegister"
									:href="route('register')"
									class="ml-4 text-sm text-gray-700 underline dark:text-gray-500"
									>Register</Link
								>
							</template>
						</div>

						<!-- Hamburger -->
						<div class="-mr-2 flex items-center sm:hidden">
							<button
								@click="
									showingNavigationDropdown =
										!showingNavigationDropdown
								"
								class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
							>
								<svg
									class="h-6 w-6"
									stroke="currentColor"
									fill="none"
									viewBox="0 0 24 24"
								>
									<path
										:class="{
											hidden: showingNavigationDropdown,
											'inline-flex': !showingNavigationDropdown,
										}"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										d="M4 6h16M4 12h16M4 18h16"
									/>
									<path
										:class="{
											hidden: !showingNavigationDropdown,
											'inline-flex': showingNavigationDropdown,
										}"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										d="M6 18L18 6M6 6l12 12"
									/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</nav>

			<!-- Page Heading -->
			<header class="bg-white shadow" v-if="$slots.header">
				<div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
					<slot name="header" />
				</div>
			</header>

			<!-- Page Content -->
			<main class="mx-auto max-w-7xl sm:px-6 lg:px-8">
				<slot />
			</main>
		</div>
	</div>
</template>
