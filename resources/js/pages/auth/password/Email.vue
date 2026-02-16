<script setup lang="ts">
import { Head, useForm, Link } from '@inertiajs/vue3';

import AuthLayout from '@/layouts/AuthLayout.vue';
import AuthHeader from '@/components/auth/AuthHeader.vue';
import AuthFormContainer from '@/components/auth/AuthFormContainer.vue';
import AuthInput from '@/components/auth/AuthInput.vue';
import AuthButton from '@/components/auth/AuthButton.vue';

const form = useForm({
  email: '',
});
</script>

<template>

  <Head title="Recuperar contraseña" />

  <AuthLayout>

    <template #header>
      <AuthHeader
        title="¿Olvidaste tu contraseña?"
        subtitle="Ingresa tu correo y te enviaremos un enlace para restablecerla."
      />
    </template>

    <form @submit.prevent="form.post('/forgot-password')" class="mt-6">

      <AuthFormContainer>

        <AuthInput
          type="email"
          name="email"
          placeholder="Correo electrónico"
          v-model="form.email"
        />

        <AuthButton
          text="Enviar enlace"
          :processing="form.processing"
        />

      </AuthFormContainer>

    </form>

    <div class="mt-12 text-center">
      <Link
        href="/login"
        class="text-white underline text-lg"
      >
        Volver al inicio de sesión
      </Link>
    </div>

  </AuthLayout>

</template>
