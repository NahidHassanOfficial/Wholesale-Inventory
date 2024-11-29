<template>
    <section class="col-span-1 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <h2 class="card-title">Low Quantity Stock</h2>
                <Link href="#" class="text-primary hover:underline">
                    See All
                </Link>
            </div>

            <div class="mt-1 overflow-x-auto">
                <table class="table">
                    <tr class="border-none">
                        <td>
                            <div class="flex items-center gap-4">
                                <div class="avatar">
                                    <div class="mask h-14 w-14">
                                        <img
                                            :src="'/images/products/tata-salt.jpg'"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <p class="font-bold">Tata Salt</p>
                                    <p class="text-sm opacity-50">
                                        Remaining Quantity : 10 Packet
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p
                                class="bg-red-200 w-fit text-red-800 text-sm px-2 py-0.5 rounded-full"
                            >
                                Low
                            </p>
                        </td>
                    </tr>
                    <tr class="border-none">
                        <td>
                            <div class="flex items-center gap-4">
                                <div class="avatar">
                                    <div class="mask h-14 w-14">
                                        <img
                                            :src="'/images/products/tata-salt.jpg'"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <p class="font-bold">Tata Salt</p>
                                    <p class="text-sm opacity-50">
                                        Remaining Quantity : 10 Packet
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p
                                class="bg-red-200 w-fit text-red-800 text-sm px-2 py-0.5 rounded-full"
                            >
                                Low
                            </p>
                        </td>
                    </tr>
                    <tr class="border-none">
                        <td>
                            <div class="flex items-center gap-4">
                                <div class="avatar">
                                    <div class="mask h-14 w-14">
                                        <img
                                            :src="'/images/products/tata-salt.jpg'"
                                        />
                                    </div>
                                </div>
                                <div>
                                    <p class="font-bold">Tata Salt</p>
                                    <p class="text-sm opacity-50">
                                        Remaining Quantity : 10 Packet
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p
                                class="bg-red-200 w-fit text-red-800 text-sm px-2 py-0.5 rounded-full"
                            >
                                Low
                            </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</template>
