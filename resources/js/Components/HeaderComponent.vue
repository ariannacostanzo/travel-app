<script setup>
import { Link } from '@inertiajs/vue3';</script>

<template>
    <header class="h-[100px] shadow-lg py-3 px-10 bg-[#F0DEC4] flex justify-between items-center">
        <h2>Logo</h2>
        <Link href="/login">
        <h2>Login</h2>
        </Link>
    </header>
</template>
