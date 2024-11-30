<script setup>
import { Head } from '@inertiajs/vue3';
import OverallInventory from './Components/Inventory/OverallInventory.vue';
import Products from './Components/Inventory/Products.vue';

</script>
<template>

    <Head>
        <title>Inventory | KANBAN</title>
    </Head>

    <section class="flex flex-col space-y-5">
        <OverallInventory />
        <Products />
    </section>
</template>
