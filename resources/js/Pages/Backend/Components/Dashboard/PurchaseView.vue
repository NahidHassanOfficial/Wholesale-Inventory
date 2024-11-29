<template>
    <section class="col-span-2 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Purchase Overview</h2>
            <div
                class="flex flex-flow flex-wrap justify-center items-center gap-2 md:px-10 mt-2"
            >
                <div
                    class="grow flex flex-col justify-center gap-6 px-6 py-4 md:border-e border-gray-200"
                >
                    <img
                        :src="'/icons/colored/bag.svg'"
                        class="h-10 w-10 mx-auto"
                    />
                    <p class="flex justify-between">
                        <span>82</span>
                        <span>Purchase</span>
                    </p>
                </div>
                <div
                    class="grow flex flex-col justify-center gap-6 px-6 py-4 md:border-e border-gray-200"
                >
                    <img
                        :src="'/icons/colored/sales.svg'"
                        class="h-10 w-10 mx-auto"
                    />
                    <p class="flex justify-between">
                        <span>₹ 13,573</span>
                        <span>Cost</span>
                    </p>
                </div>
                <div
                    class="grow flex flex-col justify-center gap-6 px-6 py-4 md:border-e border-gray-200"
                >
                    <img
                        :src="'/icons/colored/sales.svg'"
                        class="h-10 w-10 mx-auto"
                    />
                    <p class="flex justify-between">
                        <span>5</span>
                        <span>Cancel</span>
                    </p>
                </div>
                <div class="grow flex flex-col justify-center gap-6 px-6 py-4">
                    <img
                        :src="'/icons/colored/sales.svg'"
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
</template>
