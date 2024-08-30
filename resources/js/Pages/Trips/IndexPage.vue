<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import image from '../../../../public/storage/jumbotron_img/logged_user_jumbo.avif';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';


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

                    <Link :href="route('trips.create')">
                    <PersonalizedButton label="New trip" colorMode="Primary"></PersonalizedButton>
                    </Link>

                </div>


            </div>

            <!-- Trips -->
            <div class="container mx-auto my-24">


                <div v-if="trips.length !== 0" class="my-8 grid grid-cols-3 gap-6">


                    <!-- Card -->
                    <Link v-for="(trip, i) in trips" type="button" :href="route('trips.show', trip.id)"

                        class="relative h-[300px] group text-center rounded-lg hover:text-slate-800 transition-all ease-in-out duration-100 overflow-hidden"
                        :class="trip.image_url === null ? 'border-2 border-slate-400' : ''">

                    <!-- Informazioni della card -->
                    <img :src="trip.image_url ? trip.image_url : 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg'"
                        alt="trip_img"
                        class="rounded-lg w-full h-full object-cover object-center group-hover:scale-125 transition-all duration-1000">

                    <div class="absolute shadowed-text top-0 left-0 right-0 bottom-0 text-white text-lg font-bold">
                        <div>
                            <h3 class="absolute top-2 left-2 text-3xl">{{ trip.title }}</h3>
                            <div class="absolute bottom-2 left-2 text-md">
                                <p> {{ formattedDate(trip.departure_date) }} - {{ formattedDate(trip.return_date) }}</p>
                            </div>
                        </div>
                        <p class="absolute bottom-2 right-2">
                            <font-awesome-icon icon="far fa-calendar" class="mr-2" />{{ days[i] }} days
                        </p>
                    </div>
                    </Link>


                </div>

                <div v-if="trips.length === 0" class="text-center my-24">
                    <h3 class="text-4xl font-bold">There are no trips available</h3>
                </div>

            </div>

        </section>

    </GeneralLayout>
</template>

<style scoped>
.shadowed-text h3,
.shadowed-text p {
    text-shadow: 1px 1px 8px black;
}
</style>
