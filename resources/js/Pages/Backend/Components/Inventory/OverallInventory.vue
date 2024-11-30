<script setup>

</script>
<template>
    <div class="w-full bg-base-100 p-5 rounded-lg shadow-sm">
        <h1 class="font-semibold text-gray-500 mb-5">Overall Inventory</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 justify-around gap-5 pb-5">

            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100 md:border-e-2 ">
                <p class=" font-semibold text-blue-500">Categories</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100 md:border-e-2 ">
                <p class=" font-semibold text-orange-500">Total Products</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100 md:border-e-2 ">
                <p class=" font-semibold text-purple-500">Top Selling</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100  ">
                <p class=" font-semibold text-red-500">Low Stocks</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>

        </div>
    </div>
</template>