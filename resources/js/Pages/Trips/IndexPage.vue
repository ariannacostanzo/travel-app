<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import image from '../../../../public/storage/jumbotron_img/logged_user_jumbo.avif';


defineProps({
    trips: Array,
    days: Array,
    user: Object
});

const formattedDate = (dateToFormatted) => {
    const date = new Date(dateToFormatted);

    const day = String(date.getDate()).padStart(2, '0');
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const year = date.getFullYear();

    const italianDate = `${day}/${month}/${year}`;

    return italianDate;
}

</script>

<template>

    <Head title="Trips" />
    <GeneralLayout :isLogged="true">

        <section id="trips">

            <!-- Jumbotron -->
            <div class="h-[600px] flex justify-center items-center relative">

                <!-- Immagine del Jumbotron -->
                <figure class="h-full w-full">
                    <img :src="image" alt="Immagine" class="h-full w-full object-cover object-center">
                </figure>

                <!-- Testo -->
                <div class="absolute text-center">

                    <h1 class="text-5xl text-white">Welcome {{ user.name }} {{ user.last_name }}</h1>

                    <Link
                        class="inline-flex mx-4 items-center cursor-pointer mt-8 px-4 py-2 bg-blue-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        type="button" as="button" :href="route('trips.create')">
                    New Trip
                    </Link>

                </div>


            </div>

            <!-- Trips -->
            <div class="container mx-auto">


                <div class="my-8 grid grid-cols-3 gap-6">

                    <Link v-for="(trip, i) in trips" type="button" :href="route('trips.show', trip.id)"
                        class="p-4 bg-blue-400 text-center rounded-lg hover:text-slate-800 hover:scale-105 transition-all ease-in-out duration-100">
                    <h3>{{ trip.title }}</h3>
                    <p>{{ formattedDate(trip.departure_date) }}</p>
                    <p>{{ formattedDate(trip.return_date) }}</p>
                    <p>{{ days[i] }}</p>
                    </Link>

                </div>

            </div>

        </section>

    </GeneralLayout>
</template>

<style></style>
