<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";

defineProps({
  links: [],
});
</script>

<template>
  <div class="mt-2 p-3 flex gap-2">
    <template v-for="(link, key) in links" :key="key">
      <div
        v-if="link.url === null"
        v-html="link.label"
        class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"
      ></div>
      <Link
        v-else
        :href="link.url"
        class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium"
      >
        {{ link.label }}</Link
      >
    </template>
  </div>
</template>
