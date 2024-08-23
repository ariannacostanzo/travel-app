<script setup>
import { Link } from '@inertiajs/vue3';</script>

<template>
    <header class="py-3 px-10 bg-sky-600 flex justify-between items-center">
        <h2>Logo</h2>
        <Link href="/login">
        <h2>Login</h2>
        </Link>
    </header>
</template>
