<!-- <script setup lang="ts">
import { Form, Head } from '@inertiajs/vue3';
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Spinner } from '@/components/ui/spinner';
import AuthBase from '@/layouts/AuthLayout.vue';
import { register } from '@/routes';
import { store } from '@/routes/login';
import { request } from '@/routes/password';

defineProps<{
    status?: string;
    canResetPassword: boolean;
    canRegister: boolean;
}>();
</script>

<template>
    <AuthBase
        title="Log in to your account"
        description="Enter your email and password below to log in"
    >
        <Head title="Log in" />

        <div
            v-if="status"
            class="mb-4 text-center text-sm font-medium text-green-600"
        >
            {{ status }}
        </div>

        <Form
            v-bind="store.form()"
            :reset-on-success="['password']"
            v-slot="{ errors, processing }"
            class="flex flex-col gap-6"
        >
            <div class="grid gap-6">
                <div class="grid gap-2">
                    <Label for="email">Email address</Label>
                    <Input
                        id="email"
                        type="email"
                        name="email"
                        required
                        autofocus
                        :tabindex="1"
                        autocomplete="email"
                        placeholder="email@example.com"
                    />
                    <InputError :message="errors.email" />
                </div>

                <div class="grid gap-2">
                    <div class="flex items-center justify-between">
                        <Label for="password">Password</Label>
                        <TextLink
                            v-if="canResetPassword"
                            :href="request()"
                            class="text-sm"
                            :tabindex="5"
                        >
                            Forgot password?
                        </TextLink>
                    </div>
                    <Input
                        id="password"
                        type="password"
                        name="password"
                        required
                        :tabindex="2"
                        autocomplete="current-password"
                        placeholder="Password"
                    />
                    <InputError :message="errors.password" />
                </div>

                <div class="flex items-center justify-between">
                    <Label for="remember" class="flex items-center space-x-3">
                        <Checkbox id="remember" name="remember" :tabindex="3" />
                        <span>Remember me</span>
                    </Label>
                </div>

                <Button
                    type="submit"
                    class="mt-4 w-full"
                    :tabindex="4"
                    :disabled="processing"
                    data-test="login-button"
                >
                    <Spinner v-if="processing" />
                    Log in
                </Button>
            </div>

            <div
                class="text-center text-sm text-muted-foreground"
                v-if="canRegister"
            >
                Don't have an account?
                <TextLink :href="register()" :tabindex="5">Sign up</TextLink>
            </div>
        </Form>
    </AuthBase>
</template> -->

<script setup lang="ts">
import { Form, Head } from '@inertiajs/vue3';
import AuthLayout from '@/layouts/AuthLayout.vue';
import AuthHeader from '@/components/auth/AuthHeader.vue';
import AuthFormContainer from '@/components/auth/AuthFormContainer.vue';
import AuthSocialButtons from '@/components/auth/AuthSocialButtons.vue';
import AuthInput from '@/components/auth/AuthInput.vue';
import AuthButton from '@/components/auth/AuthButton.vue';


import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Checkbox } from '@/components/ui/checkbox';
import { Spinner } from '@/components/ui/spinner';

import { emailResetPswd, register } from '@/routes';
import { store } from '@/routes/login';
import { request } from '@/routes/password';


defineProps<{
    status?: string;
    canResetPassword: boolean;
    canRegister: boolean;
}>();
</script>

<template>

    <Head title="Iniciar Sesión" />

    <AuthLayout>

        <template #header>
            <AuthHeader title="¡Hola, Bienvenido!"
                subtitle="Inicia sesión para continuar con la experiencia mundialista." />
        </template>

        <Form v-bind="store.form()" v-slot="{ processing }">

            <AuthFormContainer>

                <AuthInput type="email" name="email" placeholder="Correo" />

                <AuthInput type="password" name="password" placeholder="Contraseña" />

                <div class="flex items-center justify-between text-sm text-white/70">

                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" />
                        Recordarme
                    </label>

                    <TextLink :href="emailResetPswd()" class="underline">
                        ¿Has olvidado tu contraseña?
                    </TextLink>

                </div>

                <AuthButton text="Entrar" :processing="processing" />

            </AuthFormContainer>

        </Form>

        <AuthSocialButtons />

        <div class="mt-12 text-center">
            <TextLink :href="register()" class="underline text-xl">
                ¿No tienes cuenta? Regístrate
            </TextLink>
        </div>

    </AuthLayout>

</template>
