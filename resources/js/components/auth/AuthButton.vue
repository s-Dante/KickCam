<script setup lang="ts">
defineProps<{
  text: string;
  processing?: boolean;
}>();
</script>

<template>
  <button
    type="submit"
    class="h-14 w-full rounded-full bg-gray-400 text-white text-xl font-semibold shadow-xl hover:bg-gray-300 transition flex justify-center items-center"
  >
    <span v-if="!processing">{{ text }}</span>
    <span v-else>...</span>
  </button>
</template>
