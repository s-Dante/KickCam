<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';

import AuthLayout from '@/layouts/AuthLayout.vue';
import AuthHeader from '@/components/auth/AuthHeader.vue';
import AuthFormContainer from '@/components/auth/AuthFormContainer.vue';
import AuthInput from '@/components/auth/AuthInput.vue';
import AuthButton from '@/components/auth/AuthButton.vue';

defineProps<{
  token: string;
  email: string;
}>();

const form = useForm({
  token: '',
  email: '',
  password: '',
  password_confirmation: '',
});
</script>

<template>

  <Head title="Restablecer contraseña" />

  <AuthLayout>

    <template #header>
      <AuthHeader
        title="Nueva contraseña"
        subtitle="Ingresa tu nueva contraseña para continuar."
      />
    </template>

    <form @submit.prevent="form.post('/reset-password')" class="mt-6">

      <AuthFormContainer>

        <AuthInput
          type="password"
          name="password"
          placeholder="Nueva contraseña"
          v-model="form.password"
        />

        <AuthInput
          type="password"
          name="password_confirmation"
          placeholder="Confirmar contraseña"
          v-model="form.password_confirmation"
        />

        <AuthButton
          text="Restablecer contraseña"
          :processing="form.processing"
        />

      </AuthFormContainer>

    </form>

  </AuthLayout>

</template>
