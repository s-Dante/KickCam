<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import Button from '@/components/ui/button/Button.vue';
import TextLink from '@/components/TextLink.vue';
import { login } from '@/routes';

// --- CONFIGURACIÓN DE ESTILOS (Arquitectura Limpia) ---
// Usamos las clases semánticas de tu app.css (bg-background, text-foreground)
const styles = {
    // Contenedor principal: Ocupa toda la pantalla, centra contenido, maneja el tema
    pageContainer: "min-h-screen w-full relative overflow-hidden flex flex-col justify-center bg-hero-gradient text-white selection:bg-white selection:text-black px-6 sm:px-10 lg:px-20 pt-safe pb-safe",


    // Capa de Balones (Fondo decorativo)
    // 'pointer-events-none' asegura que los clicks pasen a través de las imágenes
    backgroundLayer: "absolute inset-0 w-full h-full z-0 overflow-hidden pointer-events-none select-none",
    ball: "absolute opacity-20 md:opacity-40 pointer-events-none transition-all duration-700",

    // Contenido Principal (Texto y Botón)
    contentWrapper: "relative z-10 flex flex-col items-start text-left space-y-6 max-w-4xl w-full",

    // Título: Grande, impactante, usando el color 'primary' de tu tema
    title: "font-sans text-6xl md:text-7xl lg:text-8xl font-extrabold tracking-tight leading-[1.1]",

    // Subtítulo o decoración (Línea)
    subtitle: "text-white/80 text-lg md:text-xl font-medium max-w-xl",

    // Botón: Personalizamos el botón base para que sea más grande en la Landing
    ctaButton: "px-10 py-6 text-lg font-semibold rounded-full bg-white text-[#2D4571] hover:bg-white/90 transition-all shadow-2xl hover:-translate-y-1 hover:cursor-pointer"
};

// --- LOGICA DE BALONES ---
// Array para distribuir los balones aleatoriamente o en posiciones fijas estéticas
const balls = [
    // Esquina superior izquierda
    { src: '/assets/balls/2022-Qatar.png', class: 'top-[-5%] left-[-5%] md:top-[-3%] md:left-[2%] w-68 md:w-74 animate-float-slow' },
    // Esquina inferior derecha
    { src: '/assets/balls/2018-Rusia.png', class: 'bottom-[30%] right-[-15%] md:bottom-[2%] md:right-[2%] w-100 md:w-127 animate-float-medium' },
    // Medio izquierda
    { src: '/assets/balls/2014-Brazil.png', class: 'bottom-[5%] left-[3%] md:bottom-[10%] md:left-[21%] w-54 md:w-57 blur-[1px]' },
    // Medio derecha arriba
    { src: '/assets/balls/2010-Sudafrica.png', class: 'top-[10%] right-[4%] md:right-[24%] w-40 md:w-50 blur-[2px]' },
];

</script>

<template>

    <Head title="Bienvenido" />

    <div :class="styles.pageContainer">

        <div :class="styles.backgroundLayer">
            <img v-for="(ball, index) in balls" :key="index" :src="ball.src" :class="[styles.ball, ball.class]"
                alt="Balón Mundial" />
        </div>

        <main :class="styles.contentWrapper">

            <h1 :class="styles.title">
                El Mundial <br class="md:hidden" />
                en un mismo lugar
            </h1>

            <p :class="styles.subtitle">
                La experiencia definitiva de realidad aumentada para fanáticos del fútbol.
            </p>

            <TextLink :href="login()">
                <Button variant="default" size="lg" :class="styles.ctaButton">
                    Comenzar Ahora
                </Button>
            </TextLink>

        </main>

    </div>
</template>

<style scoped>
/* Animaciones personalizadas para dar vida a los balones 
   (Si no las tienes en tw-animate-css)
*/
@keyframes float {

    0%,
    100% {
        transform: translateY(0px) rotate(0deg);
    }

    50% {
        transform: translateY(-20px) rotate(5deg);
    }
}

.animate-float-slow {
    animation: float 8s ease-in-out infinite;
}

.animate-float-medium {
    animation: float 6s ease-in-out infinite;
    animation-delay: 1s;
}
</style>