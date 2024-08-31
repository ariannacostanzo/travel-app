<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';

import mapImage from '../../../../public/storage/show_images/map.jpg';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';
import { ref, onMounted } from 'vue';

const loadGoogleMapsScript = () => {
    return new Promise((resolve, reject) => {
        if (window.google) {
            resolve();
            return;
        }
        if (document.getElementById('google-maps-script')) {
            document.getElementById('google-maps-script').onload = resolve;
            document.getElementById('google-maps-script').onerror = reject;
            return;
        }
        const script = document.createElement('script');
        script.id = 'google-maps-script';
        script.src = `https://maps.googleapis.com/maps/api/js?key=${import.meta.env.VITE_GOOGLE_MAPS_API_KEY}&libraries=places`;
        script.async = true;
        script.defer = true;
        script.onload = resolve;
        script.onerror = reject;
        document.head.appendChild(script);
    });
};

const props = defineProps({
    trip: Object,
    days: Array,
    stops: Array,
});

const mapRef = ref(null);
const map = ref(null);

const changeDayTitle = (e) => {
    e.stopPropagation();
    console.log('cambio titolo');
    
}

const initializeMap = () => {
    if (mapRef.value) {
        // Crea una nuova mappa con un centro e uno zoom predefiniti
        map.value = new google.maps.Map(mapRef.value, {
            center: { lat: 0, lng: 0 }, // Centro di default
            zoom: 2, // Zoom di default
        });

        // Crea bounds per includere tutti i marker
        const bounds = new google.maps.LatLngBounds();

        props.stops.forEach(stop => {
            if (stop.latitude && stop.longitude) {
                const position = { lat: parseFloat(stop.latitude), lng: parseFloat(stop.longitude) };

                // Crea un div per contenere l'etichetta personalizzata
                const markerLabel = document.createElement('div');
                markerLabel.className = 'custom-marker';
                markerLabel.innerHTML = stop.title;

                // Crea un OverlayView personalizzato
                const customMarker = new google.maps.OverlayView();
                customMarker.onAdd = function () {
                    const panes = this.getPanes();
                    panes.overlayImage.appendChild(markerLabel);
                };
                customMarker.draw = function () {
                    const overlayProjection = this.getProjection();
                    const positionPixel = overlayProjection.fromLatLngToDivPixel(position);
                    markerLabel.style.left = positionPixel.x + 'px';
                    markerLabel.style.top = positionPixel.y + 'px';
                };
                customMarker.onRemove = function () {
                    markerLabel.parentNode.removeChild(markerLabel);
                };
                customMarker.setPosition = function (latlng) {
                    position = latlng;
                    this.draw();
                };
                customMarker.setMap(map.value);

                // Estendi i bounds per includere questa posizione
                bounds.extend(position);
            }
        });

        // Adatta la mappa ai bounds per mostrare tutti i marker
        map.value.fitBounds(bounds);
    }
};

onMounted(() => {
    loadGoogleMapsScript()
        .then(() => {
            if (window.google) {
                initializeMap();
            } else {
                console.error('Google Maps is not available.');
            }
        })
        .catch(error => {
            console.error('Failed to load Google Maps script:', error);
        });
});
</script>

<template>

    <Head title="Show Trip" />
    <GeneralLayout :isLogged="true">

        <figure v-if="trip.image_url" class="relative overflow-hidden mx-auto h-[700px] jumbotron">
            <h1 class=" shadowed-text font-bold text-white text-6xl py-5 text-center my-6">{{ trip.title }}</h1>
            <img :src="trip.image_url" alt="" class="w-full h-full object-cover object-center opacity-90">
        </figure>

        <section class="container mx-auto my-24">

            <h1 v-if="!trip.image_url" class="font-bold text-6xl py-5 text-center mt-20">{{ trip.title }}</h1>

            <h2 class="text-4xl font-bold py-5 my-5 text-center">Travel itinerary</h2>

            <!-- Button Modify -->
            <Link :href="route('trips.edit', trip.id)" type="button" as="button"
                class="h-12 w-12 text-white bg-[#f3a737] rounded-full fixed bottom-[220px] right-5 group flex items-center justify-center">

            <div
                class="absolute text-center bottom-14 right-0 w-20 bg-[#f3a737] rounded-full hidden group-hover:block z-50">
                Modify
            </div>

            <font-awesome-icon icon="fas fa-pencil" class="fa-lg" />

            </Link>

            <!-- Button Delete -->
            <Link :href="route('trips.destroy', trip.id)" method="DELETE" type="button" as="button"
                class="h-12 w-12 text-white bg-[#f44336] rounded-full fixed bottom-[120px] right-5 flex items-center justify-center group">

            <div
                class="absolute text-center bottom-14 right-0 w-20 bg-[#f44336] rounded-full hidden group-hover:block z-50">
                Delete
            </div>

            <font-awesome-icon icon="fas fa-trash-can" class="fa-lg" />

            </Link>

            <!-- Button Go back -->
            <Link :href="route('trips.index')" type="button" as="button"
                class="h-12 z-10 w-12 text-white bg-[#999999] rounded-full fixed bottom-5 right-5 group flex items-center justify-center">

            <div
                class="absolute text-center bottom-14 right-0 w-20 bg-[#999999] rounded-full hidden group-hover:block z-50">
                Go back
            </div>

            <font-awesome-icon icon="fas fa-arrow-left" class="fa-lg" />

            </Link>


            <!-- Mappa dinamica -->
            <div id="map" ref="mapRef" style="height: 600px; width: 100%;"
                class="rounded-md mb-7 shadow-lg shadow-stone-400"></div>


            <!-- card del giorno  -->
            <div v-for="day in days" :key="day.id"
                class="day-card flex justify-between bg-slate-100 p-4 gap-8 items-center rounded-md shadow-lg shadow-stone-400 mb-2 transition-all ease-in-out duration-100">
                <div class="custom-basis">
                    <Link :href="route('days.show', day.id)">
                    <div class="flex items-center gap-96 justify-between">

                        <div class="border-r px-4 border-gray-500 ">
                            <p class="text-2xl">Day</p>
                            <p class="text-3xl font-bold text-center">{{ day.number }}</p>
                        </div>
                        <div class="basis-3/5">
                            <div class="flex gap-3 items-center">
                                <h4 class="text-3xl font-bold ">{{ day.title }}</h4>
                            </div>
                            <div>
                                <p>{{ day.description }}</p>
                            </div>
                        </div>
                    </div>
                    </Link>
                </div>
                <!-- button per modificare il titolo -->
                <button @click="changeDayTitle($event)"
                    class="border border-black py-1 px-2 rounded-full group hover:bg-[#91635C] hover:text-white hover:border-[#91635C]">
                    <font-awesome-icon icon="fas fa-pencil" class="fa-lg" />
                    <div
                        class="absolute text-center top-0 right-0 w-20 bg-[#91635C] rounded-full hidden group-hover:block z-50">
                        Modify
                    </div>
                </button>
            </div>





        </section>
    </GeneralLayout>
</template>

<style>
/* Puoi aggiungere stili personalizzati per la mappa qui */
.custom-marker {
    text-transform: capitalize;
    background-color: #DBEAFE;
    color: #1E40AF;
    border: 1px solid #1E40AF;
    padding: 5px;
    border-radius: 50px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    white-space: nowrap;
    transform: translate(-50%, -100%);
    position: absolute;
}

.shadowed-text {
    text-shadow: 1px 1px 8px black;
}

.jumbotron h1 {
    position: absolute;
    z-index: 30;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.custom-basis {
    flex-basis: 98%;
}



</style>
