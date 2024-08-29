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
        <section class="container mx-auto">

            <h1 class="font-bold text-5xl py-5 text-center my-6">{{ trip.title }}</h1>


            <h2 class="text-4xl font-bold py-5 text-center">Travel itinerary</h2>
            <!-- Mappa dinamica -->
            <div id="map" ref="mapRef" style="height: 600px; width: 100%;"
                class="rounded-md mb-7 shadow-lg shadow-stone-400"></div>


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
                <Link :href="route('trips.destroy', trip.id)" method="DELETE">
                <PersonalizedButton label="delete" colorMode="secondary"></PersonalizedButton>
                </Link>

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
</style>
