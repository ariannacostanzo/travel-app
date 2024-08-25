<script setup>
import { Head } from '@inertiajs/vue3';
import { useForm } from 'laravel-precognition-vue-inertia';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import image from '../../../public/storage/jumbotron_img/paesaggio.jpg';
import FormComponent from '@/Components/Form/FormComponent.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

// Dati del form di registrazione
const registerForm = useForm('post', '/register', {
    email: '',
    name: '',
    last_name: '',
    password: '',
    password_confirmation: '',
});

// Dati del form di login
const loginForm = useForm('post', '/login', {
    email: '',
    password: '',
});

// Funzione per il submit del form
const submit = (option) => {

    if (option === 'Register') {

        registerForm.submit({
            preserveScroll: true,
            onSuccess: () => registerForm.reset(),
        });
    }

    if (option === 'Login') {

        loginForm.submit({
            preserveScroll: true,
            onSuccess: () => loginForm.reset(),
        });
    }
}
</script>

<script>
export default {
    data: () => ({
        isHidden: true,
        option: ''
    })
}
</script>

<template>

    <Head title="Home" />

    <!-- Layout Generico creato da noi -->
    <GeneralLayout>

        <!-- Sezione Home -->
        <section id="home" class="h-full relative">

            <!-- Jumbotron -->
            <div class="h-full flex justify-center items-center relative">

                <!-- Immagine del Jumbotron -->
                <figure class="h-full w-full">
                    <img :src="image" alt="Immagine" class="h-full w-full object-cover">
                </figure>

                <!-- Testo con i due buttoni (apre l'offcanvas della Register) -->
                <div class="absolute text-center">

                    <h1 class="text-5xl text-white">gioacchino shit</h1>

                    <!-- Bottone per registrarsi -->
                    <button
                        class="inline-flex mx-4 items-center cursor-pointer mt-8 px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        @click="isHidden = !isHidden; option = 'Register'">
                        Register
                    </button>

                    <!-- Bottone per fare il login (apre l'offcanvas della Login) -->
                    <button
                        class="inline-flex mx-4 items-center cursor-pointer mt-8 px-4 py-2 bg-blue-300 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        @click="isHidden = !isHidden; option = 'Login'">
                        Login
                    </button>

                </div>

            </div>

            <!-- Overlay -->
            <div id="overlay"
                class="fixed top-0 right-0 bottom-0 left-0 p-8 bg-[#0000007f] transition-opacity duration-200"
                :class="{ 'invisible': isHidden, 'opacity-0': isHidden }">

                <!-- Offcanvas -->
                <div :class="{ 'translate-x-full': isHidden }"
                    class="absolute top-0 right-0 bottom-0 bg-slate-200 w-1/2 p-20 transition-all duration-200">

                    <!-- Titolo dell'offcanvas -->
                    <h2 class="text-3xl text-center mb-8">{{ option }}</h2>

                    <!-- Componente del form -->
                    <FormComponent :option="option" :login="loginForm" :register="registerForm" @submit="submit" />

                    <!-- bottone per chiusura offcanvas -->
                    <button class="absolute top-5 right-5" @click="isHidden = !isHidden; option = ''">
                        <font-awesome-icon icon="fas fa-xmark" class="fa-2x" />
                    </button>

                </div>

            </div>

        </section>

    </GeneralLayout>

</template>

<style></style>
