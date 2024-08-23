<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import GeneralLayout from '@/Layouts/GeneralLayuot.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import image from '../../../public/storage/jumbotron_img/paesaggio.jpg';

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

const form = useForm({
    email: '',
    name: '',
    last_name: '',
    password: '',
});
</script>

<template>

    <Head title="Home" />

    <GeneralLayout>

        <!-- Sezione del Jumbotron -->
        <section id="jumbotron">

            <div class="h-[700px] flex justify-center items-center relative">

                <figure class="h-full w-full">
                    <img :src="image" alt="Immagine" class="h-full w-full object-cover">
                </figure>

                <div class="absolute text-center">

                    <h1 class="text-5xl text-white">gioacchino shit</h1>

                    <a class="inline-flex items-center cursor-pointer mt-8 px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150"
                        href="#register">
                        Register
                    </a>

                </div>

            </div>

        </section>

        <!-- Sezione del form di registrazione -->
        <section id="register">

            <div class="container mx-auto my-10">

                <div class="p-8 bg-white shadow-slate-500 w-10/12 mx-auto rounded-lg">

                    <h2 class="text-3xl text-center mb-8">Register</h2>

                    <!-- Form -->
                    <form action="">
                        <div class="columns-2">

                            <!-- Name -->
                            <div>
                                <InputLabel class="text-xl" for="name" value="Name" />

                                <TextInput id="name" type="text" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                                    v-model="form.name" required />

                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>


                            <!-- Email -->
                            <div class="my-5">
                                <InputLabel class="text-xl" for="email" value="Email" />

                                <TextInput id="email" type="email" class="mt-1 text-lg h-8 rounded-2xl block w-full"
                                    v-model="form.email" required />

                                <InputError class="mt-2" :message="form.errors.email" />
                            </div>

                            <!-- Last Name -->
                            <div>
                                <InputLabel class="text-xl" for="last_name" value="Lastname" />

                                <TextInput id="last_name" type="text" class="mt-1 text-lg block h-8 rounded-2xl w-full"
                                    v-model="form.last_name" required />

                                <InputError class="mt-2" :message="form.errors.last_name" />
                            </div>

                            <!-- Password -->
                            <div class="my-5">
                                <InputLabel class="text-xl" for="password" value="Password" />

                                <TextInput id="password" type="password"
                                    class="mt-1 text-lg block h-8 rounded-2xl w-full" v-model="form.password"
                                    required />

                                <InputError class="mt-2" :message="form.errors.password" />
                            </div>

                        </div>

                        <div class="flex justify-center items-center">

                            <button
                                class="inline-flex items-center mt-8 px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Register
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </section>

    </GeneralLayout>

</template>

<style></style>
