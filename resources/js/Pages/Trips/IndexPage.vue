<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';


defineProps({
    trips: Array,
});

</script>

<template>

    <Head title="Trips" />
    <GeneralLayout>

        <section class="container mx-auto bg-red-600">
            <Link v-for="trip in trips" :key="trip.id" :href="route('trips.show', trip.id)" class="hover:text-white">
                <h1>{{ trip.title }}</h1>
            </Link>
            <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button" :href="route('trips.create')">
                New Trip
            </Link>
        </section>
    </GeneralLayout>
</template>

<style></style>
