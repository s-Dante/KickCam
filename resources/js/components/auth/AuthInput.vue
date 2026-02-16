<script setup lang="ts">
defineProps<{
  type?: string;
  name: string;
  placeholder: string;
}>();
</script>

<template>
  <input
    :type="type || 'text'"
    :name="name"
    :placeholder="placeholder"
    class="h-14 w-full rounded-full bg-gray-300 text-black px-6 shadow-xl focus:ring-0 focus:outline-none"
  />
</template>
