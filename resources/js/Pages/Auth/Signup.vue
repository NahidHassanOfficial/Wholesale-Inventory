<script setup>
import AuthLayout from './AuthLayout.vue'
defineOptions({
    layout: AuthLayout,
})


</script>
<template>

    <Head>
        <title>Sign Up | Create Account</title>
    </Head>

    <section class="register flex flex-col items-center space-y-4">
        <div class="flex flex-col justify-center items-center mb-5 space-y-5">
            <img :src="'/images/logo.svg'" alt="Brand Logo">
            <div class="mt-5 text-center">
                <h1 class=" text-2xl font-semibold text-gray-800">Create an account</h1>
                <p class="text-gray-500">Start managing your business today</p>
            </div>
        </div>
        <div class="mx-auto min-w-96 px-4 ">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Name</label>
                <input type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Enter your name" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Email</label>
                <input type="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Enter your email" required />
            </div>
            <div class="mb-5">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Password</label>
                <input type="password" id="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Repeat
                    password</label>
                <input type="password" id="repeat-password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <button type="button"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                Started</button>
        </div>
        <p class="text-gray-500">Already have an account?
            <Link class="text-blue-500" :href="route('login')">Log In</Link>
        </p>
    </section>
</template>