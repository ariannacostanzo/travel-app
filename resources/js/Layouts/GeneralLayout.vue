<script setup>
import HeaderComponent from '@/components/HeaderComponent.vue';
import FooterComponent from '@/components/FooterComponent.vue';
import image from '../../../public/storage/logo_img/travel-app-logo.png';
defineProps({
    isLogged: {
        type: Boolean
    }
})
</script>

<template>
    <HeaderComponent :isLogged="isLogged" />
    <main>
        <slot />
        <FooterComponent :logo="image" />
    </main>
</template>

<style></style>