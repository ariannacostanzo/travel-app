<script setup>
import HeaderComponent from '@/components/HeaderComponent.vue';
import FooterComponent from '@/components/FooterComponent.vue';
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
        <FooterComponent />
    </main>
</template>

<style></style>