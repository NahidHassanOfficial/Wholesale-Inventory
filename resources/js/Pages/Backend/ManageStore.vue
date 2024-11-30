<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import StoreCard from "./Components/Stores/StoreCard.vue";
</script>

<template>

    <Head>
        <title>Stores | KANBAN</title>
    </Head>

    <section class="card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <h2 class="card-title">Manage Store</h2>
                <button class="btn bg-blue-500 hover:bg-blue-400 text-white">Add Store</button>
            </div>
            <div class="mt-1 p-5">
                <StoreCard />
                <StoreCard />
                <StoreCard />
            </div>
        </div>
    </section>
</template>