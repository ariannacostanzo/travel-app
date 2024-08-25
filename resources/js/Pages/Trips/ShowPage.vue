<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';


defineProps({
    trip: Object,
});

</script>

<template>

    <Head title="Show Page" />
    <GeneralLayout>

        <section class="container mx-auto">
            <h1 class="bg-amber-600">{{ trip.title }}</h1>
            <div class="flex justify-between">
                <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button"
                :href="route('trips.destroy', trip.id)" method="DELETE">
                    Delete
                </Link>
                <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button" :href="route('trips.edit', trip.id)">
                    Modify
                </Link>
                <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button" :href="route('trips.index')">
                    Go back
                </Link>
            </div>
        </section>
    </GeneralLayout>

</template>

<style></style>
