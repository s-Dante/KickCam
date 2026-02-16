<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppLogo from '@/components/AppLogo.vue'; // Asegúrate de tener este componente o usa un <img> simple
import { UI_THEME } from '@/constants/theme'; // Tus variables globales
</script>

<template>
    <div :class="`min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 ${UI_THEME.bg_main}`">
        <div class="mb-6">
            <Link href="/">
                <AppLogo class="w-20 h-20 fill-current text-blue-600" />
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>