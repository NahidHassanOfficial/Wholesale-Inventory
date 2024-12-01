<script setup>
import ApexchartCard from '../Utilities/ApexchartCard.vue';

const seriesData = [
    {
        name: "Purchase",
        data: [10, 15, 20, 25, 40, 35, 40, 45, 50, 55, 60, 65],
    },
    {
        name: "Sales",
        data: [12, 18, 24, 30, 30, 42, 48, 54, 60, 66, 72, 65],
    },
];
</script>

<template>
    <section class="col-span-2 h-96 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <h2 class="card-title">Sales & Purchase</h2>
                <h2 class="flex items-center gap-2 border py-1 px-4 rounded-md">
                    <span>
                        <img :src="'/icons/colored/sales.svg'" class="w-5 h-5" />
                    </span>
                    <span>Weekly</span>
                </h2>
            </div>
            <div class="mt-1 w-full h-full">
                <ApexchartCard :type="'bar'" :series="seriesData" />
            </div>
        </div>
    </section>
</template>
