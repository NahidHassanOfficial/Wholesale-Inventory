<script setup>
import InventorySummary from "./Components/Dashboard/InventorySummary.vue";
import LowQtyStock from "./Components/Dashboard/LowQtyStock.vue";
import OrderChart from "./Components/Dashboard/OrderChart.vue";
import ProductSummary from "./Components/Dashboard/ProductSummary.vue";
import PurchaseOverview from "./Components/Dashboard/PurchaseOverview.vue";
import SalesPurchaseChart from "./Components/Dashboard/SalesPurchaseChart.vue";
import SalesOverview from "./Components/Dashboard/SalesOverview.vue";
import TopSell from "./Components/Dashboard/TopSell.vue";
</script>
<template>
    <section class="grid grid-cols-3 gap-4">
        <SalesOverview />
        <InventorySummary />
        <PurchaseOverview />
        <ProductSummary />
        <SalesPurchaseChart />
        <OrderChart />
        <TopSell />
        <LowQtyStock />
    </section>
</template>
