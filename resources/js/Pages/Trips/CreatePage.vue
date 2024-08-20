<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';

const form = useForm('post', '/trips',{
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
    <section class="container mx-auto bg-red-600">
        <form @submit.prevent="submit">
            <label for="title">Title</label>
            <input
                id="title"
                v-model="form.title"
                @change="form.validate('title')"
            />
            <div v-if="form.invalid('title')">
                {{ form.errors.title }}
            </div>
 
            <label for="departure_date">Departure date</label>
            <input
                id="departure_date"
                type="date"
                v-model="form.departure_date"
                @change="form.validate('departure_date')"
            />
            <label for="return_date">Return date</label>
            <input
                id="return_date"
                type="date"
                v-model="form.return_date"
                @change="form.validate('return_date')"
            />
            <div v-if="form.invalid('return_date')">
                {{ form.errors.return_date }}
            </div>
 
            <button :disabled="form.processing">
                Create Trip
            </button>
        </form>
    </section>

</template>

<style></style>
