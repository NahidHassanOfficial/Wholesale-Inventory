<script setup>
const props = defineProps({
    status: String,
    background: {
        type: Boolean,
        default: true
    }
})

const statusClasses = {
    withBg: {
        'pending': 'bg-gray-100 text-gray-700',
        'out for delivery': 'bg-blue-100 text-blue-700',
        'delivered': 'bg-green-100 text-green-700',
        'returned': 'bg-red-100 text-red-700',
        'low': 'bg-red-100 text-red-700',
        'in stock': 'bg-green-100 text-green-700',
        'low stock': 'bg-yellow-100 text-yellow-700',
        'out of stock': 'bg-red-100 text-red-700',
    },

    withoutBg: {
        'pending': 'text-gray-700',
        'out for delivery': 'text-blue-700',
        'delivered': 'text-green-700',
        'returned': 'text-red-700',
        'low': 'text-red-700',
        'in stock': 'text-green-700',
        'low stock': 'text-yellow-700',
        'out of stock': 'text-red-700',
    }
}
</script>
<template>
    <span class="rounded-md font-semibold px-3 py-2"
        :class="background ? statusClasses.withBg[status] : statusClasses.withoutBg[status]">
        {{ status.toUpperCase() }}
    </span>
</template>