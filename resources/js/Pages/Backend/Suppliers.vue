<script setup>
import { Head } from '@inertiajs/vue3';
import Suppliers from './Components/Suppliers/Suppliers.vue';

</script>
<template>

    <Head>
        <title>Suppliers | KANBAN</title>
    </Head>

    <section class="flex flex-col space-y-5">
        <Suppliers />
    </section>
</template>
