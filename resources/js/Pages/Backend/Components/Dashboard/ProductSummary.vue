<script setup>

</script>

<template>
    <section class="col-span-1 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title">Product Summary</h2>
            <div class="flex flex-row flex-wrap justify-center items-center space-x-5 md:px-5 mt-2">
                <div class="grow flex flex-col justify-center gap-6 px-2 py-4 md:border-e border-gray-200">
                    <img :src="'/icons/colored/user.svg'" class="h-10 w-10 mx-auto" />
                    <p class="flex flex-col justify-center items-center text-center text-wrap">
                        <span>31</span>
                        <span>Number of Suppliers</span>
                    </p>
                </div>
                <div class="grow flex flex-col justify-center gap-6 px-2 py-4">
                    <img :src="'/icons/colored/list.svg'" class="h-10 w-10 mx-auto" />
                    <p class="flex flex-col justify-center items-center text-center text-wrap">
                        <span>21</span>
                        <span>Number of Categories</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>
