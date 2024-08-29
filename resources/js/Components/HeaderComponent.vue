<script setup>
import { Link } from '@inertiajs/vue3';
// import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import image from '../../../public/storage/logo_img/travel-app-logo.png';
import { ref, onMounted, onUnmounted } from 'vue';

const showingNavigationDropdown = ref(false);
defineProps({
    isLogged: {
        type: Boolean
    }
})

const scrollPosition = ref(0);

const handleScroll = () => {
    scrollPosition.value = window.scrollY;
    console.log(scrollPosition.value)
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>




<template>
    <header
        class="h-[100px] py-3 px-10  fixed left-0 top-0 right-0 z-40 flex justify-between items-center transition ease-in-out duration-300"
        :class="[scrollPosition > 500 ? 'bg-[#f0dec4] shadow-lg' : 'bg-transparent']">
        <div class="flex gap-10 items-center">
            <figure class="w-[80px]">
                <img :src="image" alt="logo">
            </figure>
            <Link v-if="isLogged" :href="route('trips.index')"
                class="text-3xl font-bold  transition ease-in-out duration-300"
                :class="[scrollPosition > 500 ? 'hover:text-[#684e52]' : 'text-white shadowed-text ']">Trips
            </Link>
        </div>

        <!-- Dropdown  -->
        <div class="hidden sm:flex sm:items-center sm:ms-6" v-if="isLogged">
            <!-- Settings Dropdown -->
            <div class="ms-3 relative">
                <Dropdown align="right" width="48">
                    <template #trigger>
                        <span class="inline-flex rounded-md">
                            <button type="button"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                {{ $page.props.auth.user.name }}

                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    </template>

                    <template #content>
                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                        <DropdownLink :href="route('logout')" method="post" as="button">
                            Log Out
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>
        </div>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center sm:hidden">
            <button @click="showingNavigationDropdown = !showingNavigationDropdown"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{
                        hidden: showingNavigationDropdown,
                        'inline-flex': !showingNavigationDropdown,
                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{
                        hidden: !showingNavigationDropdown,
                        'inline-flex': showingNavigationDropdown,
                    }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </header>
</template>

<style scoped>
.shadowed-text {

    text-shadow: 1px 1px 8px black;
}
</style>
