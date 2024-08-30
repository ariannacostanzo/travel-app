<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import Modal from '@/Components/Modal.vue';
import { ref, onMounted, watch, nextTick } from 'vue';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputError from '@/Components/InputError.vue';

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

const showInfo = ref(false);
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
    onSuccess: () => {
        closeModal(); 
        initializeMap()
    },
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
        showInfo.value = !showInfo.value;
    } else {
        showInfo.value = true;
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

        <section id="show-day" class="container mx-auto my-24">

            <!-- Title -->
            <h1 class="text-5xl text-center my-6">{{ day.title }}</h1>

            <!-- Button Add Stop -->
            <button @click="openModal"
                class="h-12 z-40 w-12 text-white bg-[#75b76f] rounded-full fixed bottom-[120px] right-5 group">

                <div class="absolute bottom-14 right-0 w-20 bg-[#75b76f] rounded-full hidden group-hover:block z-50">Add
                    stop
                </div>

                <font-awesome-icon icon="fas fa-plus" class="fa-lg" />

            </button>

            <!-- Button Modify -->
            <!-- <Link @click="openModal" :href="route('days.edit', day.id)" type="button" as="button"
                class="h-12 z-40 w-12 text-white bg-[#f3a737] rounded-full fixed bottom-[120px] right-5 group flex items-center justify-center">

            <div
                class="absolute text-center bottom-14 right-0 w-20 bg-[#f3a737] rounded-full hidden group-hover:block z-50">
                Modify
            </div>

            <font-awesome-icon icon="fas fa-pencil" class="fa-lg" />

            </Link> -->

            <!-- Button Go back -->
            <Link :href="route('trips.show', day.trip_id)" type="button" as="button"
                class="h-12 z-40 w-12 text-white bg-[#999999] rounded-full fixed bottom-5 right-5 group flex items-center justify-center">

            <div
                class="absolute text-center bottom-14 right-0 w-20 bg-[#999999] rounded-full hidden group-hover:block z-50">
                Go back
            </div>

            <font-awesome-icon icon="fas fa-arrow-left" class="fa-lg" />

            </Link>

            <!-- Mappa -->
            <div id="map" class="rounded-md" ref="mapRef" style="height: 500px; width: 100%;"></div>

            <!-- Tappe (Row) -->
            <div class="flex flex-wrap my-8 -mx-4">

                <!-- Col -->
                <div v-for="stop in stops" :key="stop.id" class="p-4 w-1/3">

                    <!-- Card -->
                    <div :id="stop.slug" :class="{ 'h-[550px] scale-105': showInfo && showId === stop.id }"
                        class="p-4 flex flex-col scale-100 min-w-0 overflow-hidden bg-[#FCFCFB] shadow-lg rounded-lg text-center h-[450px] transition-all duration-1000 ease-in-out">

                        <!-- Titolo -->
                        <h2 class="text-3xl font-bold">{{ stop.title }}</h2>

                        <figure class="h-[300px] rounded-lg my-4">
                            <img :src="stop.image" :alt="stop.title" class="h-full w-full rounded-lg">
                        </figure>

                        <!-- Bottone apertura info -->
                        <div v-if="stop.foods || stop.rating !== 0" class="flex justify-center my-4">
                            <button @click="openMap(stop.id)" class="flex items-center gap-1">
                                Info
                                <font-awesome-icon icon="fa-solid fa-angle-down"
                                    :class="{ 'rotate-180': showInfo === true && showId === stop.id }"
                                    class="transition-all duration-100 ease-in-out" />
                            </button>
                        </div>

                        <!-- Info -->
                        <div v-if="showInfo && showId === stop.id"
                            :class="{ 'h-60 opacity-100': showInfo && showId === stop.id }"
                            class="rounded-lg opacity-0">

                            <!-- Foods -->
                            <p v-if="stop.foods" class="mt-4">
                                <strong>Food: </strong>{{ stop.foods }}
                            </p>

                            <!-- Rating -->
                            <p v-if="stop.rating !== 0">
                                <strong>Rating: </strong>
                                <font-awesome-icon v-for="(rating, i) in stop.rating" :key="i" icon="fa-solid fa-star"
                                    class="text-yellow-600 mt-4 mr-1" />
                            </p>

                        </div>

                    </div>

                </div>



            </div>

        </section>

        <Modal :show="confirmingUserDeletion" @close="closeModal">

            <form @submit.prevent="submit" class="p-6">

                <!-- title  -->
                <div class="my-2">
                    <label for="title" class="text-2xl text-[#684e52] font-bold">Title</label>
                    <input id="title" v-model="form.title" @change="form.validate('title')"
                        class="mt-1 text-lg block h-12 border-gray-300 focus:border-[#684e52] focus:ring-[#684e52] rounded-md shadow-sm w-full" />
                    <div v-if="form.invalid('title')">{{ form.errors.title }}</div>
                </div>

                <!-- image  -->

                <div class="my-2">
                    <label for="image" class="text-2xl text-[#684e52] font-bold">Image</label>
                    <input id="image" v-model="form.image" @change="form.validate('image')"
                        class="mt-1 text-lg block h-12 border-gray-300 focus:border-[#684e52] focus:ring-[#684e52] rounded-md shadow-sm w-full" />
                    <div v-if="form.invalid('image')">{{ form.errors.image }}</div>
                </div>

                <!-- food  -->
                <div class="my-2">
                    <label for="foods" class="text-2xl text-[#684e52] font-bold">Foods</label>
                    <textarea cols="30" rows="10" id="foods" v-model="form.foods" @change="form.validate('foods')"
                        class="w-full border-gray-300 focus:border-[#684e52] focus:ring-[#684e52] rounded-md shadow-sm"></textarea>
                    <div v-if="form.invalid('foods')">{{ form.errors.foods }}</div>
                </div>

                <!-- address  -->
                <div class="my-2">
                    <label for="address-input" class="text-2xl text-[#684e52] font-bold">Address</label>
                    <input id="address-input" ref="addressInputRef" v-model="form.address"
                        @change="form.validate('address')"
                        class="mt-1 text-lg block h-12 border-gray-300 focus:border-[#684e52] focus:ring-[#684e52] rounded-md shadow-sm w-full" />
                    <div v-if="form.invalid('address')">{{ form.errors.address }}</div>
                </div>

                <input id="latitude" v-model="form.latitude" type="hidden" />
                <input id="longitude" v-model="form.longitude" type="hidden" />


                <div class="flex justify-center">
                    <button
                        class=" inline-flex items-center mt-8 px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white  uppercase tracking-widest hover:shadow-xl transition ease-in-out duration-150 hover:bg-[#443c3d] bg-[#684e52]"
                        :disabled="form.processing">
                        Create Stop
                    </button>
                </div>

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
