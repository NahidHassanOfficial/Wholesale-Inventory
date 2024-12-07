<script setup>
import { reactive, ref } from 'vue';
import AuthLayout from './AuthLayout.vue'
defineOptions({
    layout: AuthLayout,
})


const formData = reactive({
    name: '',
    email: '',
    phone: '',
    address: '',
    password: '',
    repeatPassword: '',
})
const formErrors = ref('');

async function submitForm() {

    loader.show();
    try {
        const response = await axios.post(route('user.register'), formData);
        toast.success('Registration Successful');
        setTimeout(() => {
            window.location.href = route('login');
        }, 1000);
    } catch ({ response: { data: { data: errors } } }) {
        formErrors.value = errors;
    } finally {
        loader.hide();
    }
}
</script>
<template>

    <Head>
        <title>Sign Up | KANBAN</title>
    </Head>

    <section class="register flex flex-col items-center space-y-4">
        <div class="flex flex-col justify-center items-center mb-5 space-y-5">
            <img :src="'/images/logo.svg'" alt="Brand Logo" draggable="false">
            <div class="mt-5 text-center">
                <h1 class=" text-2xl font-semibold text-gray-800 dark:text-white">Create an account</h1>
                <p class="text-gray-500">Start managing your business today</p>
            </div>
        </div>
        <div class="mx-auto min-w-full px-4 ">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Name</label>
                <input v-model="formData.name" type="text" id="name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Enter your name" required />
                <span v-for="error in formErrors.name" class="text-red-500 text-sm">{{ error }}</span>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Email</label>
                <input v-model="formData.email" type="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Enter your email" required />
                <span v-for="error in formErrors.email" class="text-red-500 text-sm">{{ error }}</span>
            </div>
            <div class="flex space-x-5 mb-5">
                <div>
                    <label for="phone"
                        class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Phone</label>
                    <input v-model="formData.phone" type="phone" id="phone"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Enter phone number" required />
                    <span v-for="error in formErrors.phone" class="text-red-500 text-sm">{{ error }}</span>
                </div>
                <div>
                    <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Address</label>
                    <input v-model="formData.address" type="address" id="address"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Enter office address" required />
                    <span v-for="error in formErrors.address" class="text-red-500 text-sm">{{ error }}</span>
                </div>
            </div>
            <div class="mb-5">
                <label for="password"
                    class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Password</label>
                <input v-model="formData.password" type="password" id="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
                <span v-for="error in formErrors.password" class="text-red-500 text-sm">{{ error }}</span>
            </div>
            <div class="mb-5">
                <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Repeat
                    password</label>
                <input v-model="formData.repeatPassword" type="password" id="repeat-password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-500 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div v-if="formData.password != '' && formData.repeatPassword != ''">
                <p v-show="formData.password != formData.repeatPassword" class="text-red-500 text-sm mb-5">Password
                    doesn't
                    match</p>
            </div>
            <button @click="submitForm" type="button"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get
                Started</button>
        </div>
        <p class="text-gray-500">Already have an account?
            <Link class="text-blue-500" :href="route('login')">Log In</Link>
        </p>
    </section>
</template>