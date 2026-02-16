<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';

import AuthLayout from '@/layouts/AuthLayout.vue';
import AuthHeader from '@/components/auth/AuthHeader.vue';
</script>

<template>

  <Head title="Revisa tu correo" />

  <AuthLayout>

    <template #header>
      <AuthHeader
        title="Revisa tu correo"
        subtitle="Te enviamos un enlace para restablecer tu contraseña."
      />
    </template>

    <div class="mt-8 flex flex-col gap-8 text-center text-white/80">

      <p class="text-lg">
        Si no encuentras el correo, revisa tu bandeja de spam.
      </p>

      <Link
        href="/login"
        class="text-white underline text-lg"
      >
        Volver al inicio de sesión
      </Link>

    </div>

  </AuthLayout>

</template>
