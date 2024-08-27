<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import FormComponent from '@/Components/Form/FormComponent.vue';

const form = useForm('post', '/trips', {
    user_id: 1,
    title: '',
    departure_date: '',
    return_date: '',
});

const submit = () => form.submit({
    preserveScroll: true,
    onSuccess: () => form.reset(),
});
</script>

<template>

    <Head title="Create Trip" />

    <!-- Layout Generico creato da noi -->
    <GeneralLayout :isLogged="true">

        <section class="container mx-auto">

            <h1 class="text-5xl font-extrabold text-center text-[#684E52] my-8">Create your trip</h1>

            <div class="p-8 m-6 rounded-xl bg-[#684e52] text-white">
                <!-- Form precedente -->
                <form @submit.prevent="submit">

                    <!-- TITLE -->
                    <label for="title">Title</label>
                    <input id="title" v-model="form.title" @change="form.validate('title')" />
                    <div v-if="form.invalid('title')">
                        {{ form.errors.title }}
                    </div>

                    <!-- DEPARTURE DATE -->
                    <label for="departure_date">Departure date</label>
                    <input id="departure_date" type="date" v-model="form.departure_date"
                        @change="form.validate('departure_date')" />
                    <div v-if="form.invalid('departure_date')">
                        {{ form.errors.departure_date }}
                    </div>

                    <!-- RETURN DATE -->
                    <label for="return_date">Return date</label>
                    <input id="return_date" type="date" v-model="form.return_date"
                        @change="form.validate('return_date')" />
                    <div v-if="form.invalid('return_date')">
                        {{ form.errors.return_date }}
                    </div>

                    <button :disabled="form.processing">
                        Create Trip
                    </button>

                </form>

                <!-- Componente del Form -->
                <FormComponent option="Create" :create="form" @submit="submit" />
            </div>

            <Link class="px-4 py-2 shadow-xl bg-[#a3a3a3] text-white rounded ml-6 mb-4" type="button" as="button"
                :href="route('trips.index')">
            Go back
            </Link>
        </section>

    </GeneralLayout>

</template>

<style></style>
