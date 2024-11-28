<script setup>
import DefultLayout from "./Layouts/DefultLayout.vue";
</script>
<template>
    <DefultLayout>
        <section class="grid grid-cols-3 gap-4">
            <section class="col-span-2 card card-compact bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Sales Overview</h2>
                    <div class="grid grid-cols-4 mt-1">
                        <div
                            class="flex flex-col justify-center gap-3 p-3 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>₹ 832</span>
                                <span>Sales</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>₹ 832</span>
                                <span>Sales</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>₹ 832</span>
                                <span>Sales</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>₹ 832</span>
                                <span>Sales</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="card card-compact bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Inventory Summary</h2>
                    <div class="grid grid-cols-2 mt-1">
                        <div
                            class="flex flex-col justify-center gap-3 p-3 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p
                                class="flex flex-col justify-center items-center"
                            >
                                <span>₹ 832</span>
                                <span>Sales</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p
                                class="flex flex-col justify-center items-center"
                            >
                                <span>₹ 832</span>
                                <span>Sales</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="col-span-2 card card-compact bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Purchase Overview</h2>
                    <div class="grid grid-cols-4 mt-1">
                        <div
                            class="flex flex-col justify-center gap-3 p-3 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/bag.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>82</span>
                                <span>Purchase</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>₹ 13,573</span>
                                <span>Cost</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>5</span>
                                <span>Cancel</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p class="flex justify-between">
                                <span>₹ 17432</span>
                                <span>Return</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="card card-compact bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Product Summary</h2>
                    <div class="grid grid-cols-2 mt-1">
                        <div
                            class="flex flex-col justify-center gap-3 p-3 border-e border-gray-200"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p
                                class="flex flex-col justify-center items-center"
                            >
                                <span>31</span>
                                <span>Number of Suppliers</span>
                            </p>
                        </div>
                        <div
                            class="flex flex-col justify-center gap-3 px-6 py-2"
                        >
                            <img
                                src="../media/icons/colored/sales.svg"
                                class="h-10 w-10 mx-auto"
                            />
                            <p
                                class="flex flex-col justify-center items-center"
                            >
                                <span>21</span>
                                <span>Number of Categories</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="card card-compact bg-base-100 shadow-xl">
                <div class="card-body">
                    <div class="flex justify-between items-center">
                        <h2 class="card-title">Sales & Purchase</h2>
                        <h2
                            class="flex items-center gap-2 border py-1 px-4 rounded-sm"
                        >
                            <span>
                                <img
                                    src="../media/icons/colored/sales.svg"
                                    class="w-5 h-5"
                                />
                            </span>
                            <span>Weekly</span>
                        </h2>
                    </div>
                    <div class="mt-1"></div>
                </div>
            </section>
        </section>
    </DefultLayout>
</template>
