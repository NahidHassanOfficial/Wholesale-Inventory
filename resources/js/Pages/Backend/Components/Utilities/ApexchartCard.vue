<script setup>
import { ref, onMounted } from "vue";

const props = defineProps({
    type: String,
    series: {
        type: Array,
        default: () => [],
    },
});

const options = ref({});

onMounted(() => {
    options.value = {
        chart: {
            toolbar: {
                show: false,
            },
        },
        stroke: {
            curve: "smooth",
        },
        xaxis: {
            categories: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec",
            ],
        },
    };
});
</script>

<template>
    <apexchart
        :type="props.type"
        height="100%"
        width="100%"
        :options="options"
        :series="props.series"
    ></apexchart>
</template>
