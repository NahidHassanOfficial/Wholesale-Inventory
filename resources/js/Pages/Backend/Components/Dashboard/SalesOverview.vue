<script setup>

</script>

<template>
    <section class="col-span-2 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Sales Overview</h2>
            <div class="flex flex-row flex-wrap justify-center items-center gap-2 md:px-10 mt-2">
                <div class="grow flex flex-col justify-center gap-6 px-6 py-4 md:border-e border-gray-200">
                    <img :src="'/icons/colored/sales.svg'" class="h-10 w-10 mx-auto" />
                    <p class="flex justify-between">
                        <span>₹ 832</span>
                        <span>Sales</span>
                    </p>
                </div>
                <div class="grow flex flex-col justify-center gap-6 px-6 py-4 md:border-e border-gray-200">
                    <img :src="'/icons/colored/revenue.svg'" class="h-10 w-10 mx-auto" />
                    <p class="flex justify-between">
                        <span>₹ 832</span>
                        <span>Sales</span>
                    </p>
                </div>
                <div class="grow flex flex-col justify-center gap-6 px-6 py-4 md:border-e border-gray-200">
                    <img :src="'/icons/colored/chart-up.svg'" class="h-10 w-10 mx-auto" />
                    <p class="flex justify-between">
                        <span>₹ 832</span>
                        <span>Sales</span>
                    </p>
                </div>
                <div class="grow flex flex-col justify-center gap-6 px-6 py-4">
                    <img :src="'/icons/colored/profit.svg'" class="h-10 w-10 mx-auto" />
                    <p class="flex justify-between">
                        <span>₹ 832</span>
                        <span>Sales</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
