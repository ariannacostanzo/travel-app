<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import mapImage from '../../../../public/storage/show_images/map.jpg';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';

defineProps({
    trip: Object,
    days: Array
});

</script>

<template>

    <Head title="Show Page" />
    <GeneralLayout :isLogged="true">

        <section class="container mx-auto">

            <h1 class="font-bold text-5xl py-5 text-center my-6">{{ trip.title }}</h1>

            <h2 class="text-4xl font-bold py-5">Travel itinerary</h2>
            <!-- qui andrà la mappa dinamica  -->
            <figure class="w-[800px] h-[600px] rounded-md mb-7">
                <img :src="mapImage" alt="map" class="w-full h-full rounded-md">
            </figure>

            <!-- giorni  -->

            <Link v-for="day in days" :key="day.id" :href="route('days.show', day.id)">
            <div
                class="day-card flex justify-between bg-slate-100 p-4 gap-8 items-center rounded-md shadow-lg shadow-stone-400 mb-2 hover:scale-105 transition-all ease-in-out duration-100">
                <div class="border-r px-4 border-gray-500">
                    <p class="text-2xl">Day</p>
                    <p class="text-3xl font-bold text-center">{{ day.number }}</p>
                </div>
                <div class="text-center">
                    <h4 class="text-3xl font-bold ">{{ day.title }}</h4>
                    <p>{{ day.description }}</p>
                </div>
                <div>
                    <span
                        class="flex items-center justify-center rounded-full border border-[#91635C] p-4 cursor-pointer hover:bg-[#91635C] hover:text-white group transition duration-300">
                        <font-awesome-icon icon="fas fa-plus" class="text-[#91635C] group-hover:text-white" />
                    </span>
                </div>
            </div>
            </Link>



            <!-- pulsanti di modifica  -->
            <div class="flex justify-between my-5">
                <Link :href="route('trips.index')">
                <PersonalizedButton label="Go back" colorMode="default"></PersonalizedButton>
                </Link>

                <Link :href="route('trips.edit', trip.id)">
                <PersonalizedButton label="modify" colorMode="primary"></PersonalizedButton>
                </Link>
                <Link 
                    :href="route('trips.destroy', trip.id)" method="DELETE">
                <PersonalizedButton label="delete" colorMode="secondary"></PersonalizedButton>
                </Link>

            </div>
        </section>
    </GeneralLayout>

</template>

<style></style>
