<script setup>
import { Head } from '@inertiajs/vue3';
import { useForm } from 'laravel-precognition-vue-inertia';
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import image from '../../../public/storage/jumbotron_img/paesaggio-2.jpeg';
import FormComponent from '@/Components/Form/FormComponent.vue';
import PersonalizedButton from '../Components/PersonalizedButton.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
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
    <GeneralLayout :isLogged="false">

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


                    <div class="flex justify-center gap-5">
                        <PersonalizedButton colorMode="primary" label="Register"
                            @click="isHidden = !isHidden; option = 'Register'"></PersonalizedButton>

                        <PersonalizedButton colorMode="secondary" label="Login"
                            @click="isHidden = !isHidden; option = 'Login'"></PersonalizedButton>
                    </div>


                </div>

            </div>

            <!-- Overlay -->
            <div id="overlay"
                class="fixed top-0 right-0 bottom-0 left-0 p-8 z-50 bg-[#0000007f] transition-opacity duration-200"
                :class="{ 'invisible': isHidden, 'opacity-0': isHidden }">

                <!-- Offcanvas -->
                <div :class="{ 'translate-x-full': isHidden }"
                    class="absolute top-0 right-0 bottom-0 bg-[#d6c9b6] w-1/2 p-20 transition-all duration-200">

                    <!-- Titolo dell'offcanvas -->
                    <h2 class="text-3xl text-center mb-8">{{ option }}</h2>

                    <!-- Componente del form -->
                    <FormComponent :option="option" :login="loginForm" :register="registerForm" @submit="submit" />

                    <!-- bottone per chiusura offcanvas -->
                    <button class="absolute top-5 right-5 z-50" @click="isHidden = !isHidden; option = ''">
                        <font-awesome-icon icon="fas fa-xmark" class="fa-2x" />
                    </button>

                </div>

            </div>

        </section>

    </GeneralLayout>

</template>

<style></style>
