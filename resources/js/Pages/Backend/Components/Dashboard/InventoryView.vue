<template>
    <section class="card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Inventory Summary</h2>
            <div class="flex flex-flow flex-wrap gap-2 mt-1">
                <div
                    class="grow flex flex-col justify-center gap-3 p-3 border-e border-gray-200"
                >
                    <img
                        :src="'/icons/colored/sales.svg'"
                        class="h-10 w-10 mx-auto"
                    />
                    <p class="flex flex-col justify-center items-center">
                        <span>₹ 832</span>
                        <span>Sales</span>
                    </p>
                </div>
                <div class="grow flex flex-col justify-center gap-3 px-6 py-2">
                    <img
                        :src="'/icons/colored/sales.svg'"
                        class="h-10 w-10 mx-auto"
                    />
                    <p class="flex flex-col justify-center items-center">
                        <span>₹ 832</span>
                        <span>Sales</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
