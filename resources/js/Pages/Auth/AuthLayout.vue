<script setup>

</script>
<template>
    <section class="main">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 place-items-center h-screen">
            <div class="hidden md:flex items-center justify-center">
                <img :src="'/images/logo-vertical.svg'" alt="Brand Logo">
            </div>
            <div class="flex items-center justify-center">
                <slot />
            </div>
        </div>
    </section>
</template>