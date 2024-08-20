<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    trip: Object,
});

</script>

<template>

    <Head title="Trips" />
    <section class="container mx-auto">
        <h1 class="bg-amber-600">{{ trip.title }}</h1>
    </section>

</template>

<style></style>
