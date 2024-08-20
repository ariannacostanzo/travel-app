<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    trips: Array,
});

</script>

<template>

    <Head title="Trips" />
    <section class="container mx-auto bg-red-600">
        <h1 v-for="trip in trips">{{ trip.title }}</h1>
    </section>

</template>

<style></style>
