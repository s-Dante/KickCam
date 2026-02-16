<template>
  <div class="mt-8 flex flex-col gap-6">

    <!-- Divider -->
    <div class="relative">
      <div class="absolute inset-0 flex items-center">
        <span class="w-full border-t border-white/20"></span>
      </div>

      <div class="relative flex justify-center text-xs uppercase tracking-wider">
        <span class="bg-transparent px-3 text-white/60">
          O continúa con
        </span>
      </div>
    </div>

    <!-- Buttons -->
    <div class="grid grid-cols-2 gap-4">

      <button
        class="flex justify-center items-center py-3 rounded-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all"
      >
        Google
      </button>

      <button
        class="flex justify-center items-center py-3 rounded-xl bg-white/10 border border-white/20 hover:bg-white/20 transition-all"
      >
        Facebook
      </button>

    </div>

  </div>
</template>
