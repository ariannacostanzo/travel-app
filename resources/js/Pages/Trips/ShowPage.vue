<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    trip: Object,
});

</script>

<template>

    <Head title="Trips" />
    <section class="container mx-auto">
        <h1 class="bg-amber-600">{{ trip.title }}</h1>
        <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button"
            :href="route('trips.destroy', trip.id)" method="DELETE">
        Elimina
        </Link>
    </section>

</template>

<style></style>
