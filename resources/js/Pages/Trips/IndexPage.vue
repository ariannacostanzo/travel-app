<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    trips: Array,
});

</script>

<template>

    <Head title="Trips" />
    <section class="container mx-auto bg-red-600">
        <h1>{{ trips[0].title }}</h1>
    </section>

</template>

<style></style>
