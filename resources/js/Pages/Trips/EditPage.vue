<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    trip: Object,
});

const action = route('trips.update', props.trip.id);

const defaultValues = {
    user_id: props.trip.user_id,
    title: props.trip.title,
    departure_date: props.trip.departure_date,
    return_date: props.trip.return_date,
}

const form = useForm('put', action, defaultValues);

const submit = () => form.submit({
    preserveScroll: true,
    onSuccess: () => form.reset(),
});
</script>

<template>

    <Head title="Edit Page" />
    <section class="container mx-auto bg-red-600">
        <form @submit.prevent="submit">
            <label for="title">Title</label>
            <input id="title" v-model="form.title" @change="form.validate('title')" />
            <div v-if="form.invalid('title')">
                {{ form.errors.title }}
            </div>

            <label for="departure_date">Departure date</label>
            <input id="departure_date" type="date" v-model="form.departure_date"
                @change="form.validate('departure_date')" />
            <label for="return_date">Return date</label>
            <input id="return_date" type="date" v-model="form.return_date" @change="form.validate('return_date')" />
            <div v-if="form.invalid('return_date')">
                {{ form.errors.return_date }}
            </div>

            <button :disabled="form.processing">
                Update
            </button>
        </form>
    </section>

</template>

<style></style>
