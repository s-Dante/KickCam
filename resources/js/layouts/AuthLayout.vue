<script setup lang="ts">
</script>

<template>
  <div class="min-h-screen w-full flex flex-col justify-start bg-hero-gradient text-white px-6 pt-16 pb-10">

    <div class="w-full max-w-md mx-auto flex flex-col">

      <slot name="header" />

      <slot />

    </div>

  </div>
</template>
