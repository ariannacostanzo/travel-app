<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import Modal from '@/Components/Modal.vue';
import { ref, onMounted, watch, nextTick } from 'vue';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';

const loadGoogleMapsScript = () => {
    return new Promise((resolve, reject) => {
        if (document.getElementById('google-maps-script')) {
            resolve();
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
    day: Object,
    stops: Array
});

const confirmingUserDeletion = ref(false);
const addressInputRef = ref(null);
const mapRef = ref(null);
const map = ref(null);

const showMap = ref(false);
const showId = ref(null);

const activeMarkerId = ref(null);


const initializeAutocomplete = () => {
    if (addressInputRef.value && addressInputRef.value instanceof HTMLInputElement) {
        // Inizializza l'autocomplete
        const autocomplete = new google.maps.places.Autocomplete(
            addressInputRef.value,
            { types: ['address'] }
        );

        autocomplete.addListener('place_changed', () => {
            const place = autocomplete.getPlace();
            if (place.geometry) {
                // Aggiorna il campo dell'indirizzo e le coordinate
                form.address = place.formatted_address;
                form.latitude = place.geometry.location.lat();
                form.longitude = place.geometry.location.lng();
            } else {
                console.error('No details available for input: ' + place.name);
            }
        });
    } else {
        console.error('Address input element not found or not an HTMLInputElement.');
    }
};


const markers = ref({});

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
                const markerLabel = document.createElement('a');
                markerLabel.className = 'custom-marker';
                markerLabel.href = "#" + stop.slug;
                markerLabel.addEventListener('click', () => {
                    openMap(stop.id);
                });
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

                    // Assegna la classe active se questo marker è attivo
                    if (activeMarkerId.value === stop.id) {
                        markerLabel.classList.add('active');
                    } else {
                        markerLabel.classList.remove('active');
                    }
                };
                customMarker.onRemove = function () {
                    markerLabel.parentNode.removeChild(markerLabel);
                };
                customMarker.setPosition = function (latlng) {
                    position = latlng;
                    this.draw();
                };
                customMarker.setMap(map.value);

                // Memorizza il marker
                markers.value[stop.id] = customMarker;

                // Estendi i bounds per includere questa posizione
                bounds.extend(position);
            }
        });

        // Adatta la mappa ai bounds per mostrare tutti i marker
        map.value.fitBounds(bounds);
    }
};




onMounted(() => {
    loadGoogleMapsScript().then(() => {
        // Osserva la visibilità della modale
        watch(() => confirmingUserDeletion.value, (newVal) => {
            if (newVal) {
                nextTick(() => {
                    initializeAutocomplete();
                });
            }
        });

        initializeMap();
    }).catch(error => {
        console.error('Failed to load Google Maps script:', error);
    });
});

const form = useForm('post', '/stops', {
    day_id: props.day.id,
    title: '',
    image: '',
    foods: '',
    address: '',
    latitude: '',
    longitude: '',
});

const submit = () => form.submit({
    preserveScroll: true,
    onSuccess: () => closeModal(),
});

const openModal = () => {
    confirmingUserDeletion.value = true;
};

const closeModal = () => {
    confirmingUserDeletion.value = false;
    form.reset();
};

const openMap = (id) => {
    if (showId.value === id) {
        showMap.value = !showMap.value;
    } else {
        showMap.value = true;
        showId.value = id;
    }

    // Aggiorna il marker attivo
    activeMarkerId.value = id;
    if (map.value) {
        // Ridisegna la mappa per aggiornare i marker
        initializeMap();
    }
}

</script>


<template>

    <Head title="Day" />

    <GeneralLayout :isLogged="true">

        <section id="show-day" class="container mx-auto">

            <!-- Title -->
            <h1 class="text-5xl text-center my-6">{{ day.title }}</h1>

            <!-- Button Add Stop -->
            <button @click="openModal"
                class="h-12 z-10 w-12 text-white bg-[#75b76f] rounded-full fixed bottom-[220px] right-5 group">

                <div class="absolute bottom-14 right-0 w-20 bg-[#75b76f] rounded-full hidden group-hover:block">Add stop
                </div>

                <font-awesome-icon icon="fas fa-plus" class="fa-lg" />

            </button>

            <!-- Button Modify -->
            <Link @click="openModal" :href="route('days.edit', day.id)" type="button" as="button"
                class="h-12 z-10 w-12 text-white bg-[#f3a737] rounded-full fixed bottom-[120px] right-5 group flex items-center justify-center">

            <div class="absolute text-center bottom-14 right-0 w-20 bg-[#f3a737] rounded-full hidden group-hover:block">
                Modify
            </div>

            <font-awesome-icon icon="fas fa-pencil" class="fa-lg" />

            </Link>

            <!-- Button Go back -->
            <Link :href="route('trips.show', day.trip_id)" type="button" as="button"
                class="h-12 z-10 w-12 text-white bg-[#999999] rounded-full fixed bottom-5 right-5 group flex items-center justify-center">

            <div class="absolute text-center bottom-14 right-0 w-20 bg-[#999999] rounded-full hidden group-hover:block">
                Go back
            </div>

            <font-awesome-icon icon="fas fa-arrow-left" class="fa-lg" />

            </Link>

            <!-- Mappa -->
            <div id="map" ref="mapRef" style="height: 500px; width: 100%;"></div>

            <!-- Tappe (Row) -->
            <div class="flex flex-wrap my-8 -mx-4">

                <!-- Col -->
                <div v-for="stop in stops" :key="stop.id" class="p-4 w-1/3">

                    <!-- Card -->
                    <div :id="stop.slug" :class="{ 'h-[368px] scale-105': showMap && showId === stop.id }"
                        class="p-4 flex flex-col scale-100 min-w-0 bg-slate-600 rounded-lg text-center h-32 transition-all duration-1000 ease-in-out">

                        <!-- Titolo -->
                        <h2 class="text-3xl font-bold">{{ stop.title }}</h2>

                        <!-- Bottone apertura mappa -->
                        <div class="flex justify-center my-4">
                            <button @click="openMap(stop.id)" class="flex items-center gap-1">
                                Map <font-awesome-icon icon="fa-solid fa-angle-down" />
                            </button>
                        </div>

                        <!-- Mappa -->
                        <div v-if="showMap && showId === stop.id" ref="singleMapRef"
                            :class="{ 'h-60 opacity-100': showMap && showId === stop.id }"
                            class="bg-red-400 rounded-lg opacity-0 transition-all duration-1000 ease-in-out">
                        </div>

                    </div>

                </div>



            </div>

        </section>

        <Modal :show="confirmingUserDeletion" @close="closeModal">

            <form @submit.prevent="submit" class="flex flex-col gap-4 p-4">

                <div class="flex flex-col">
                    <label for="title">Title</label>
                    <input id="title" v-model="form.title" @change="form.validate('title')" />
                    <div v-if="form.invalid('title')">{{ form.errors.title }}</div>
                </div>

                <div class="flex flex-col">
                    <label for="image">Image</label>
                    <input id="image" v-model="form.image" @change="form.validate('image')" />
                    <div v-if="form.invalid('image')">{{ form.errors.image }}</div>
                </div>

                <div class="flex flex-col">
                    <label for="foods">Foods</label>
                    <textarea cols="30" rows="10" id="foods" v-model="form.foods"
                        @change="form.validate('foods')"></textarea>
                    <div v-if="form.invalid('foods')">{{ form.errors.foods }}</div>
                </div>

                <div class="flex flex-col">
                    <label for="address-input">Address</label>
                    <input id="address-input" ref="addressInputRef" v-model="form.address"
                        @change="form.validate('address')" />
                    <div v-if="form.invalid('address')">{{ form.errors.address }}</div>
                </div>

                <input id="latitude" v-model="form.latitude" type="hidden" />
                <input id="longitude" v-model="form.longitude" type="hidden" />

                <button class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" :disabled="form.processing">
                    Create Stop
                </button>

            </form>

        </Modal>

    </GeneralLayout>

</template>

<style>
.custom-marker {
    background-color: white;
    border: 2px solid black;
    padding: 5px;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    font-size: 12px;
    white-space: nowrap;
    transform: translate(-50%, -100%);
    position: absolute;
}

.custom-marker.active {
    border: 2px solid red;

}
</style>
