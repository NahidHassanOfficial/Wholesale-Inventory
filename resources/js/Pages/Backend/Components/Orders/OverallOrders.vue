<script setup>

</script>
<template>
    <div class="w-full bg-base-100 p-5 rounded-lg shadow-sm">
        <h1 class="font-semibold text-gray-500 mb-5">Overall Orders</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 justify-around gap-5 pb-5">

            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100 md:border-e-2 ">
                <p class=" font-semibold text-blue-500">Total Orders</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100 md:border-e-2 ">
                <p class=" font-semibold text-orange-500">Total Recieved</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100 md:border-e-2 ">
                <p class=" font-semibold text-purple-500">Total Return</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>
            <div class="flex flex-col justify-center items-center space-y-5 border-gray-100  ">
                <p class=" font-semibold text-red-500">On the way</p>
                <p class="font-semibold text-gray-500">12</p>
            </div>

        </div>
    </div>
</template>