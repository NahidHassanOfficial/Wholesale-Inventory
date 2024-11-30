<script setup>
import { Head } from '@inertiajs/vue3';
import OverallOrders from './Components/Orders/OverallOrders.vue';
import Orders from './Components/Orders/Orders.vue';

</script>
<template>

    <Head>
        <title>Orders | KANBAN</title>
    </Head>

    <section class="flex flex-col space-y-5">
        <OverallOrders />
        <Orders />
    </section>
</template>
