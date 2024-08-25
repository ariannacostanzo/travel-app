<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import FormComponent from '@/Components/Form/FormComponent.vue';

const props = defineProps({
    trip: Object,
});

const action = route('trips.update', props.trip.id);

const form = useForm('put', action, {
    user_id: props.trip.user_id,
    title: props.trip.title,

    departure_date: props.trip.departure_date.substr(0, 10),
    return_date: props.trip.return_date.substr(0, 10),
});

const submit = () => form.submit({
    preserveScroll: true,
    onSuccess: () => form.reset(),
});
</script>

<template>

    <Head title="Edit Page" />

    <!-- Layout Generico creato da noi -->
    <GeneralLayout>

        <section class="container mx-auto bg-red-600">

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
                <input id="return_date" type="date" v-model="form.return_date" @change="form.validate('return_date')" />
                <div v-if="form.invalid('return_date')">
                    {{ form.errors.return_date }}
                </div>

                <button :disabled="form.processing">
                    Update
                </button>
            </form>
            
            <!-- Componente del Form -->
            <FormComponent option="Edit" :edit="form" @submit="submit" />
            <Link class="px-4 py-2 shadow-xl bg-blue-400 rounded my-6" type="button" as="button" :href="route('trips.show', trip.id)">
                Go back
            </Link>
        </section>

    </GeneralLayout>

</template>

<style></style>
