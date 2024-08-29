<script setup>
import { useForm } from 'laravel-precognition-vue-inertia';
import { Head, Link } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import FormComponent from '@/Components/Form/FormComponent.vue';
import PersonalizedButton from '@/Components/PersonalizedButton.vue';

const props = defineProps({
    trip: Object,
});

const action = route('trips.update', props.trip.id);

const form = useForm('put', action, {
    user_id: props.trip.user_id,
    title: props.trip.title,
    departure_date: props.trip.departure_date.substr(0, 10),
    return_date: props.trip.return_date.substr(0, 10),
    image_url: props.trip.image_url
});

console.log(props.trip)
const submit = () => form.submit({
    preserveScroll: true,
    onSuccess: () => form.reset(),
});
</script>

<template>

    <Head title="Edit Page" />

    <!-- Layout Generico creato da noi -->
    <GeneralLayout :isLogged="true">

        <section class="container mx-auto ">

            <h1 class="text-5xl font-extrabold text-center text-[#684E52] my-8">Modify your trip</h1>

            <div class="p-8 m-6 rounded-xl ">




                <!-- Componente del Form -->
                <FormComponent option="Edit" :edit="form" @submit="submit" />

            </div>

            <div class="my-6">

                <Link 
                    :href="route('trips.show', trip.id)">
                    <PersonalizedButton label="go back" colorMode="default"></PersonalizedButton>
                </Link>
            </div>
        </section>

    </GeneralLayout>

</template>

<style></style>
