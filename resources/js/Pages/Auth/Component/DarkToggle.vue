<script setup>
import { ref } from 'vue';
const light = ref(false);
const dark = ref(false);

const userTheme = localStorage.getItem('theme');
const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';

if (userTheme) {
    document.documentElement.classList.add(userTheme);
    light.value = userTheme === 'light';
    dark.value = userTheme === 'dark';
} else {
    document.documentElement.classList.add(systemTheme);
    light.value = systemTheme === 'light';
    dark.value = systemTheme === 'dark';
}

function toggleTheme() {
    if (light.value) {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        light.value = false;
        dark.value = true;
    } else {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        localStorage.setItem('theme', 'light');
        light.value = true;
        dark.value = false;
    }
}
</script>
<template>

    <div class="absolute top-0 right-0 me-10 pt-3">
        <button v-if="dark" @click="toggleTheme" type="darkmode"
            class="font-medium text-gray-800 rounded-full hover:bg-gray-800 focus:outline-none focus:bg-gray-200">
            <span class="group inline-flex shrink-0 justify-center items-center size-9">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
            </span>
        </button>
        <button v-if="light" @click="toggleTheme" type="lightmode"
            class="font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200">
            <span class="group inline-flex shrink-0 justify-center items-center size-9">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2"></path>
                    <path d="M12 20v2"></path>
                    <path d="m4.93 4.93 1.41 1.41"></path>
                    <path d="m17.66 17.66 1.41 1.41"></path>
                    <path d="M2 12h2"></path>
                    <path d="M20 12h2"></path>
                    <path d="m6.34 17.66-1.41 1.41"></path>
                    <path d="m19.07 4.93-1.41 1.41"></path>
                </svg>
            </span>
        </button>
    </div>

</template>