<script setup>
import { ref, reactive, defineProps } from "vue";
</script>

<template>
	<div class="py-2">
		<div class="mb-4 rounded bg-white">
			<div class="p-3">
				<div
					class="bg-100% -m-3 h-8 bg-no-repeat"
					style="
						background-image: url('https://www.redditstatic.com/desktop2x/img/id-cards/banner@2x.png');
					"
				></div>
				<div>
					<div class="inline-flex items-center">
						<img
							src="https://www.redditstatic.com/desktop2x/img/id-cards/snoo-home@2x.png"
							class="h-16"
						/>
						<span class="ml-4 mt-6 text-lg">r/popular</span>
					</div>
					<p class="mb-3 text-sm font-normal leading-normal">
						The best posts on Reddit for you, pulled from the most active
						communities on Reddit. Check here to see the most shared,
						upvoted, and commented content on the internet.
					</p>
					<button
						class="bg-blue-dark w-full rounded px-4 py-2 text-sm font-semibold text-white"
					>
						CREATE POST
					</button>
				</div>
			</div>
		</div>
		<div class="mb-4 rounded bg-white">
			<div class="p-2">
				<div class="flex items-center">
					<svg
						class="text-orange mr-4 h-6 w-6 fill-current"
						viewBox="0 0 20 20"
						xmlns="http://www.w3.org/2000/svg"
					>
						<title>Reddit Premium</title>
						<path
							d="M13.535 15.785c-1.678.244-2.883.742-3.535 1.071v-5.113a2 2 0 0 0-2-2H4.217c.044-.487.076-1.016.076-1.629 0-1.692-.489-2.968-.884-3.722L4.8 3.001H10v4.742a2 2 0 0 0 2 2h3.783c.06.67.144 1.248.22 1.742.097.632.182 1.177.182 1.745 0 1.045-.829 2.291-2.65 2.555m5.028-12.249l-2.242-2.242a1 1 0 0 0-.707-.293H4.386a1 1 0 0 0-.707.293L1.436 3.536a1 1 0 0 0-.069 1.337c.009.011.926 1.2.926 3.241 0 1.304-.145 2.24-.273 3.065-.106.684-.206 1.33-.206 2.051 0 1.939 1.499 4.119 4.364 4.534 2.086.304 3.254 1.062 3.261 1.065a1.016 1.016 0 0 0 1.117.004c.011-.007 1.18-.765 3.266-1.069 2.864-.415 4.363-2.595 4.363-4.534 0-.721-.099-1.367-.206-2.051-.128-.825-.272-1.761-.272-3.065 0-2.033.893-3.199.926-3.241a.999.999 0 0 0-.07-1.337"
						></path>
					</svg>
					<div class="flex flex-col">
						<span class="text-black-alt mb-1 text-xs font-medium"
							>Reddit Premium</span
						>
						<span class="text-xxs font-normal">Ads-free browsing</span>
					</div>
					<div class="ml-auto flex">
						<button
							class="bg-orange ml-auto rounded px-4 py-2 text-xs font-semibold text-white"
						>
							GET PREMIUM
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-4 rounded bg-white">
			<div class="w-full p-3 text-xxs font-semibold">
				TRENDING COMMUNITIES
			</div>
			<div class="pb-4">
				<div class="px-3 py-2">
					<div class="flex">
						<img
							class="mr-2 h-8 w-8 rounded-full border"
							src="https://avatars0.githubusercontent.com/u/30317862?s=200&v=4"
						/>
						<div class="flex flex-col font-medium">
							<a
								href="#"
								class="text-black-alt text-xs leading-tight no-underline"
								>r/tailwind</a
							>
							<span class="text-xxs">1.000 subscribers</span>
						</div>
						<div class="ml-auto flex">
							<button
								class="bg-blue-dark ml-auto rounded px-4 text-xs font-semibold text-white"
							>
								SUBSCRIBE
							</button>
						</div>
					</div>
				</div>
				<div class="px-3 py-2">
					<div class="flex">
						<img
							class="mr-2 h-8 w-8 rounded-full border"
							src="https://avatars0.githubusercontent.com/u/30317862?s=200&v=4"
						/>
						<div class="flex flex-col font-medium">
							<a
								href="#"
								class="text-black-alt text-xs leading-tight no-underline"
								>r/tailwind</a
							>
							<span class="text-xxs">1.000 subscribers</span>
						</div>
						<div class="ml-auto flex">
							<button
								class="bg-blue-dark ml-auto rounded px-4 text-xs font-semibold text-white"
							>
								SUBSCRIBE
							</button>
						</div>
					</div>
				</div>
				<div class="px-3 py-2">
					<div class="flex">
						<img
							class="mr-2 h-8 w-8 rounded-full border"
							src="https://avatars0.githubusercontent.com/u/30317862?s=200&v=4"
						/>
						<div class="flex flex-col font-medium">
							<a
								href="#"
								class="text-black-alt text-xs leading-tight no-underline"
								>r/tailwind</a
							>
							<span class="text-xxs">1.000 subscribers</span>
						</div>
						<div class="ml-auto flex">
							<button
								class="bg-blue-dark ml-auto rounded px-4 text-xs font-semibold text-white"
							>
								SUBSCRIBE
							</button>
						</div>
					</div>
				</div>
				<div class="px-3 py-2">
					<div class="flex">
						<img
							class="mr-2 h-8 w-8 rounded-full border"
							src="https://avatars0.githubusercontent.com/u/30317862?s=200&v=4"
						/>
						<div class="flex flex-col font-medium">
							<a
								href="#"
								class="text-black-alt text-xs leading-tight no-underline"
								>r/tailwind</a
							>
							<span class="text-xxs">1.000 subscribers</span>
						</div>
						<div class="ml-auto flex">
							<button
								class="bg-blue-dark ml-auto rounded px-4 text-xs font-semibold text-white"
							>
								SUBSCRIBE
							</button>
						</div>
					</div>
				</div>
				<div class="px-3 py-2">
					<div class="flex">
						<img
							class="mr-2 h-8 w-8 rounded-full border"
							src="https://avatars0.githubusercontent.com/u/30317862?s=200&v=4"
						/>
						<div class="flex flex-col font-medium">
							<a
								href="#"
								class="text-black-alt text-xs leading-tight no-underline"
								>r/tailwind</a
							>
							<span class="text-xxs">1.000 subscribers</span>
						</div>
						<div class="ml-auto flex">
							<button
								class="bg-blue-dark ml-auto rounded px-4 text-xs font-semibold text-white"
							>
								SUBSCRIBE
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mb-4 rounded bg-white">
			<div class="p-3">
				<div class="flex justify-between">
					<div>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>About</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Careers</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Press</a
						>
					</div>
					<div>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Advertise</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Blog</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Help</a
						>
					</div>
					<div>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>The Reddit App</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Reddit Coins</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Reddit Premium</a
						>
						<a
							href="#"
							class="block text-xs font-medium text-black no-underline"
							>Reddit Gifts</a
						>
					</div>
				</div>
				<div class="mt-6 text-center">
					<p class="text-xs font-medium leading-tight text-black">
						<a href="#" class="text-black no-underline">Content Policy</a>
						|
						<a href="#" class="text-black no-underline">Privacy Policy</a>
					</p>
					<p class="text-xs font-medium leading-tight text-black">
						<a href="#" class="text-black no-underline">User Agreement</a>
						|
						<a href="#" class="text-black no-underline">Mod Policy</a>
					</p>
					<p class="text-xs font-medium leading-tight text-black">
						© 2018 Reddit, Inc. All rights reserved
					</p>
				</div>
			</div>
		</div>
	</div>
</template>
