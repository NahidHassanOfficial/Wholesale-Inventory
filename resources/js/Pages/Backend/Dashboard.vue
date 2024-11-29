<script setup>
import InventoryView from "./Components/Dashboard/InventoryView.vue";
import LowQtyStock from "./Components/Dashboard/LowQtyStock.vue";
import OrderChart from "./Components/Dashboard/OrderChart.vue";
import ProductView from "./Components/Dashboard/ProductView.vue";
import PurchaseView from "./Components/Dashboard/PurchaseView.vue";
import SalesPurchaseChart from "./Components/Dashboard/SalesPurchaseChart.vue";
import SalesView from "./Components/Dashboard/SalesView.vue";
import TopSell from "./Components/Dashboard/TopSell.vue";
</script>
<template>
    <section class="grid grid-cols-3 gap-4">
        <SalesView />
        <InventoryView />
        <PurchaseView />
        <ProductView />
        <SalesPurchaseChart />
        <OrderChart />
        <TopSell />
        <LowQtyStock />
    </section>
</template>
