<script setup>
const props = defineProps({
    status: String,
    bg: {
        type: Boolean,
        default: true
    }
})

const statusClasses = {
    withBg: {
        'pending': 'bg-gray-100 text-gray-500',
        'out for delivery': 'bg-blue-100 text-blue-500',
        'delivered': 'bg-green-100 text-green-500',
        'returned': 'bg-red-100 text-red-500',
        'low': 'bg-red-100 text-red-500',
        'in stock': 'bg-green-100 text-green-500',
        'low stock': 'bg-yellow-100 text-yellow-500',
        'out of stock': 'bg-red-100 text-red-500',
    },

    withoutBg: {
        'pending': 'text-gray-500',
        'out for delivery': 'text-blue-500',
        'delivered': 'text-green-500',
        'returned': 'text-red-500',
        'low': 'text-red-500',
        'in stock': 'text-green-500',
        'low stock': 'text-yellow-500',
        'out of stock': 'text-red-500',
    }
}
</script>
<template>
    <span class="rounded-lg font-semibold px-3 py-2"
        :class="bg ? statusClasses.withBg[status] : statusClasses.withoutBg[status]">
        {{ status }}
    </span>
</template>