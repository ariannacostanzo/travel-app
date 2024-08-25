<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    trips: Array,
});

</script>

<template>

    <Head title="Trips" />
    <section class="container mx-auto bg-red-600">
        <Link v-for="trip in trips" :key="trip.id" :href="route('trips.show', trip.id)" class="hover:text-white">
            <h1>{{ trip.title }}</h1>
        </Link>
    </section>

</template>

<style></style>
