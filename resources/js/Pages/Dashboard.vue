<script setup>
import GeneralLayout from '@/Layouts/GeneralLayout.vue';
import { Head } from '@inertiajs/vue3';


defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    
});
</script>

<template>
    <Head title="Dashboard" />

    <GeneralLayout :isLogged="true">
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>
    </GeneralLayout>
</template>
