<script setup>
import { ref } from "vue";
import BreezeApplicationLogo from "@/Components/ApplicationLogo.vue";
import BreezeNavLink from "@/Components/NavLink.vue";
import BreezeResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/inertia-vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
	<div>
		<div class="min-h-screen bg-slate-300">
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

							<!-- Navigation Links -->
							<div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
								<BreezeNavLink
									:href="route('dashboard')"
									:active="route().current('dashboard')"
								>
									Dashboard
								</BreezeNavLink>
								<BreezeNavLink
									:href="route('communities.index')"
									:active="route().current('communities.*')"
								>
									Communities
								</BreezeNavLink>
							</div>
						</div>

						<div class="hidden sm:ml-6 sm:flex sm:items-center"></div>

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

				<!-- Responsive Navigation Menu -->
				<div
					:class="{
						block: showingNavigationDropdown,
						hidden: !showingNavigationDropdown,
					}"
					class="sm:hidden"
				>
					<div class="space-y-1 pt-2 pb-3">
						<BreezeResponsiveNavLink
							:href="route('dashboard')"
							:active="route().current('dashboard')"
						>
							Dashboard
						</BreezeResponsiveNavLink>
					</div>

					<!-- Responsive Settings Options -->
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
