<script setup lang="ts">
import StoreCard from "./Components/Store/StoreCard.vue";
</script>

<template>
    <section class="card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <h2 class="card-title">Manage Store</h2>
                <button class="btn btn-primary">Add Store</button>
            </div>
            <div class="mt-1 p-5">
                <StoreCard />
                <StoreCard />
                <StoreCard />
            </div>
        </div>
    </section>
</template>