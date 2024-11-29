<script setup>
import InventoryView from "./Components/Dashboard/InventoryView.vue";
import ProductView from "./Components/Dashboard/ProductView.vue";
import PurchaseView from "./Components/Dashboard/PurchaseView.vue";
import SalesPurchaseChart from "./Components/Dashboard/SalesPurchaseChart.vue";
import SalesView from "./Components/Dashboard/SalesView.vue";
</script>
<template>
    <section class="grid grid-cols-3 gap-4">
        <SalesView />
        <InventoryView />
        <PurchaseView />
        <ProductView />
        <SalesPurchaseChart />
    </section>
</template>
