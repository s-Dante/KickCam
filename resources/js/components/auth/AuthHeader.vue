<script setup lang="ts">
defineProps<{
  title: string;
  subtitle?: string;
}>();
</script>

<template>
  <div class="mb-12">
    <h1 class="text-5xl font-extrabold leading-tight tracking-tight">
      {{ title }}
    </h1>

    <p v-if="subtitle" class="mt-4 text-white/70 text-lg">
      {{ subtitle }}
    </p>
  </div>
</template>
