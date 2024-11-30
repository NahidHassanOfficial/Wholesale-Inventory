<script setup>
import BestSellingCategory from "./Components/Reports/BestSellingCategory.vue";
import BestSellingProduct from "./Components/Reports/BestSellingProduct.vue";
import Overview from "./Components/Reports/Overview.vue";
import ProfitRevenue from "./Components/Reports/ProfitRevenue.vue";
</script>

<template>
    <section class="grid grid-cols-2 gap-4">
        <Overview />
        <BestSellingCategory />
        <ProfitRevenue />
        <BestSellingProduct />
    </section>
</template>
