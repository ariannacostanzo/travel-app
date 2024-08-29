<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import FormComponent from '@/Components/Form/FormComponent.vue';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';

const form = useForm('post', '/trips', {
    user_id: 1,
    title: '',
    departure_date: '',
    return_date: '',
    image_url: '',
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

            <div class="p-8 m-6  ">

                <!-- Componente del Form -->
                <FormComponent option="Create" :create="form" @submit="submit" />
            </div>

            <div class="my-6">

                <Link :href="route('trips.index')">
                    <PersonalizedButton label="go back" colorMode="default"></PersonalizedButton>
                </Link>
            </div>
        </section>

    </GeneralLayout>

</template>

