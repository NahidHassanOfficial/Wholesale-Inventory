<script setup>
import DarkToggle from './Component/DarkToggle.vue';


</script>
<template>

    <DarkToggle />

    <section class="main dark:bg-gray-700 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 place-items-center h-screen">
            <div class="hidden md:flex items-center justify-center">
                <img :src="'/images/logo-vertical.svg'" alt="Brand Logo" draggable="false">
            </div>
            <div class="flex items-center justify-center">
                <slot />
            </div>
        </div>
    </section>
</template>