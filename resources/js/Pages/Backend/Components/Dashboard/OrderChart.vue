<script setup>
import ApexchartCard from "../Utilities/ApexchartCard.vue";

const seriesData = [
    {
        name: "Ordered",
        data: [10, 15, 20, 25, 40, 35, 40, 45, 50, 55, 60, 65],
    },
    {
        name: "Delivered",
        data: [12, 18, 24, 30, 30, 42, 48, 54, 60, 66, 72, 65],
    },
];
</script>

<template>
    <section class="col-span-1 h-96 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex justify-start items-center">
                <h2 class="card-title">Order Summary</h2>
            </div>
            <div class="mt-1 w-full h-full">
                <ApexchartCard :type="'line'" :series="seriesData" />
            </div>
        </div>
    </section>
</template>
