<script setup>
import { reactive } from 'vue';
import AuthLayout from './AuthLayout.vue'
defineOptions({
    layout: AuthLayout,
})

const formData = reactive({
    email: '',
    password: '',
    remember: false,
})

async function submitForm() {
    loader.show();
    try {
        const response = await axios.post(route('user.login'), formData);
        toast.success('Login Successful');
        setTimeout(() => {
            window.location.href = route('dashboard');
        }, 1000);
    } catch (error) {
        toast.error(error.response.data.message);
    } finally {
        loader.hide();
    }
}
</script>
<template>

    <Head>
        <title>Log In | KANBAN</title>
    </Head>

    <section class="login flex flex-col items-center space-y-4">
        <div class="flex flex-col justify-center items-center mb-5 space-y-5">
            <img :src="'/images/logo.svg'" alt="Brand Logo" draggable="false">
            <div class="mt-5 text-center">
                <h1 class=" text-2xl font-semibold text-gray-800 dark:text-white">Login to your account</h1>
                <p class="text-gray-500 ">welcome back please enter you details</p>
            </div>
        </div>
        <div class="mx-auto min-w-96 px-4 ">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Email</label>
                <input v-model="formData.email" type="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Enter your email" required />
            </div>
            <div class="mb-5">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Password</label>
                <input v-model="formData.password" type="password" id="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="flex items-center justify-between space-x-5 mb-5">
                <div class="flex items-center">
                    <input v-model="formData.remember" id="terms" type="checkbox" value=""
                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-500 dark:focus:ring-offset-gray-500" />
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-500 dark:text-gray-300">Remember for
                        30 days</label>
                </div>
                <a href="#" class="text-sm text-blue-500">Forgot Password?</a>
            </div>
            <button @click="submitForm" type="button"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log
                In</button>
        </div>
        <p class="text-gray-500">Don't have an account?
            <Link class="text-blue-500" :href="route('register')">Sign Up</Link>
        </p>
    </section>
</template>