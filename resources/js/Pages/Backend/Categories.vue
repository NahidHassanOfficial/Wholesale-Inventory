<script setup>
import { Head } from '@inertiajs/vue3';
import Categories from './Components/Categories/Categories.vue';

</script>
<template>

    <Head>
        <title>Categories | KANBAN</title>
    </Head>

    <section class="flex flex-col space-y-5">
        <Categories />
    </section>
</template>
