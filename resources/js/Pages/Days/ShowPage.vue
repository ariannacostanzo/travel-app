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


const initializeMap = () => {
    if (mapRef.value) {
        // Crea una nuova mappa con un centro e uno zoom predefiniti
        map.value = new google.maps.Map(mapRef.value, {
            center: { lat: 0, lng: 0 }, // Centro di default
            zoom: 2, // Zoom di default
        });

        // Crea bounds per includere tutti i marker
        const bounds = new google.maps.LatLngBounds();

        // Aggiungi un marker per ogni fermata e estendi i bounds
        props.stops.forEach(stop => {
            if (stop.latitude && stop.longitude) {
                const position = { lat: parseFloat(stop.latitude), lng: parseFloat(stop.longitude) };

                // Crea un marker
                new google.maps.Marker({
                    position,
                    map: map.value,
                    title: stop.title,
                });

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
</script>

<template>

    <Head title="Show Page" />
    <GeneralLayout :isLogged="true">
        <section class="container mx-auto">
            <div class="flex justify-between">
                <h1 class="bg-amber-600">{{ day.title }}</h1>
                <button @click="openModal">
                    Add stop
                    <font-awesome-icon icon="fas fa-plus" class="fa-2x" />
                </button>
            </div>

            <!-- Mappa -->
            <div id="map" ref="mapRef" style="height: 500px; width: 100%;"></div>

            <!-- Lista tappe -->
            <ul>
                <li v-for="stop in stops" :key="stop.id">{{ stop.title }}</li>
            </ul>

            <div class="flex justify-between my-6">
                <Link :href="route('trips.show', day.trip_id)">
                <PersonalizedButton label="Go back" colorMode="default"></PersonalizedButton>
                </Link>

                <Link :href="route('days.edit', day.id)">
                <PersonalizedButton label="modify" colorMode="primary"></PersonalizedButton>
                </Link>
                <Link :href="route('days.destroy', day.id)" method="DELETE">
                <PersonalizedButton label="delete" colorMode="secondary"></PersonalizedButton>
                </Link>
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

<style></style>
