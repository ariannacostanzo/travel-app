<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import Modal from '@/Components/Modal.vue';
import { nextTick, ref } from 'vue';


const props = defineProps({
    day: Object,
    stops: Array
});

const confirmingUserDeletion = ref(false);

const form = useForm('post', '/stops', {
    day_id: props.day.id,
    title: '',
    image: '',
    foods: '',
    address: '',
    latitude: 0,
    longitude: 0,
});

const submit = () => form.submit({
    preserveScroll: true,
    onSuccess: () => closeModal(),

});

const openModal = () => {
    confirmingUserDeletion.value = true;

    // nextTick(() => passwordInput.value.focus());
};

const closeModal = () => {
    confirmingUserDeletion.value = false;

    form.reset();
};



</script>

<template>

    <Head title="Show Page" />
    <GeneralLayout>

        <section class="container mx-auto">

            <div class="flex justify-between">
                <!-- Dati giorno -->
                <h1 class="bg-amber-600">{{ day.title }}</h1>

                <button @click="openModal">
                    Add stop
                    <font-awesome-icon icon="fas fa-plus" class="fa-2x" />

                </button>
            </div>

            <!-- Fermate -->
            <ul>
                <li v-for="stop in stops">{{ stop.title }}</li>
            </ul>

            <!-- Barra Bottoni -->
            <div class="flex justify-between">
                <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button"
                    :href="route('days.destroy', day.id)" method="DELETE">
                Delete
                </Link>
                <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button"
                    :href="route('days.edit', day.id)">
                Modify
                </Link>
                <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button"
                    :href="route('trips.show', day.trip_id)">
                Go back
                </Link>
            </div>
        </section>

        <Modal :show="confirmingUserDeletion" @close="closeModal">

            <!-- Form precedente -->
            <form @submit.prevent="submit" class="flex flex-col gap-4 p-4">

                <!-- TITLE -->
                <div class="flex flex-col">
                    <label for="title">Title</label>
                    <input id="title" v-model="form.title" @change="form.validate('title')" />
                    <div v-if="form.invalid('title')">
                        {{ form.errors.title }}
                    </div>
                </div>

                <!-- IMAGE -->
                <div class="flex flex-col">
                    <label for="image">Image</label>
                    <input id="image" v-model="form.image" @change="form.validate('image')" />
                    <div v-if="form.invalid('image')">
                        {{ form.errors.image }}
                    </div>
                </div>

                <!-- FOODS -->
                <div class="flex flex-col">
                    <label for="foods">Foods</label>
                    <textarea cols="30" rows="10" id="foods" v-model="form.foods" @change="form.validate('foods')">
                </textarea>
                    <div v-if="form.invalid('foods')">
                        {{ form.errors.foods }}
                    </div>
                </div>

                <!-- ADDRESS -->
                <div class="flex flex-col">
                    <label for="address">address</label>
                    <input id="address" v-model="form.address" @change="form.validate('address')" />
                    <div v-if="form.invalid('address')">
                        {{ form.errors.address }}
                    </div>
                </div>

                <!-- LATITUDE -->
                <div class="flex flex-col">
                    <input id="latitude" v-model="form.latitude" @change="form.validate('latitude')" />
                    <div v-if="form.invalid('latitude')">
                        {{ form.errors.latitude }}
                    </div>
                </div>

                <!-- LONGITUDE -->
                <div class="flex flex-col">
                    <input id="longitude" v-model="form.longitude" @change="form.validate('longitude')" />
                    <div v-if="form.invalid('longitude')">
                        {{ form.errors.longitude }}
                    </div>
                </div>

                <button class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" :disabled="form.processing">
                    Create Stop
                </button>

            </form>

        </Modal>
    </GeneralLayout>

</template>

<style></style>
