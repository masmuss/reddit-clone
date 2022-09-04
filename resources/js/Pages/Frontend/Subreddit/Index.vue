<script setup>
import { ref, reactive, defineProps } from "vue";
defineProps({
  subreddit: {
    type: Object,
    required: true,
  },
});
</script>

<template>
  <div>{{ subreddit }}</div>
</template>
