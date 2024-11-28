<script setup>
import { ref, onMounted } from "vue";
import { Link } from "@inertiajs/vue3";

const theme = ref("light");

const toggleTheme = () => {
    theme.value = theme.value === "light" ? "dark" : "light";
    document.documentElement.setAttribute("data-theme", theme.value);
    localStorage.setItem("theme", theme.value);
};

onMounted(() => {
    const savedTheme = localStorage.getItem("theme") || "light";
    theme.value = savedTheme;
    document.documentElement.setAttribute("data-theme", savedTheme);
});
</script>

<template>
    <section class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <section class="drawer-content flex flex-col">
            <!-- Page content here -->

            <header class="navbar bg-base-200 px-5">
                <label
                    for="my-drawer-2"
                    class="btn btn-info text-white drawer-button lg:hidden mr-5"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        class="inline-block h-5 w-5 stroke-current"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        ></path>
                    </svg>
                </label>

                <div class="flex-1">
                    <label
                        class="input input-bordered flex items-center gap-2 w-96"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="h-4 w-4 opacity-70"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <input type="text" class="grow" placeholder="Search" />
                    </label>
                </div>
                <div class="flex items-center">
                    <div class="dropdown dropdown-end mr-5">
                        <svg
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 cursor-pointer"
                        >
                            <path
                                d="M13.4417 19.5C13.2952 19.7525 13.0849 19.9622 12.8319 20.1079C12.5788 20.2536 12.292 20.3303 12 20.3303C11.708 20.3303 11.4212 20.2536 11.1681 20.1079C10.9151 19.9622 10.7048 19.7525 10.5583 19.5M17 8.66663C17 7.34054 16.4732 6.06877 15.5355 5.13109C14.5979 4.19341 13.3261 3.66663 12 3.66663C10.6739 3.66663 9.40215 4.19341 8.46447 5.13109C7.52678 6.06877 7 7.34054 7 8.66663C7 14.5 4.5 16.1666 4.5 16.1666H19.5C19.5 16.1666 17 14.5 17 8.66663Z"
                                stroke="#5D6679"
                                stroke-width="1.2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </div>
                    <div class="dropdown dropdown-end mr-5">
                        <label
                            @click="toggleTheme"
                            for="theme-toggle"
                            class="swap swap-rotate"
                        >
                            <input
                                id="theme-toggle"
                                type="checkbox"
                                :checked="theme === 'dark'"
                                class="hidden"
                                @change="toggleTheme"
                            />

                            <!-- Sun icon for light mode -->
                            <svg
                                class="swap-on h-6 w-6 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z"
                                />
                            </svg>

                            <!-- Moon icon for dark mode -->
                            <svg
                                class="swap-off h-6 w-6 fill-current"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z"
                                />
                            </svg>
                        </label>
                    </div>
                    <div class="dropdown dropdown-end">
                        <div
                            tabindex="0"
                            role="button"
                            class="btn btn-ghost btn-circle avatar"
                        >
                            <div class="w-10 rounded-full">
                                <img
                                    alt="Tailwind CSS Navbar component"
                                    src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp"
                                />
                            </div>
                        </div>
                        <ul
                            tabindex="0"
                            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow"
                        >
                            <li>
                                <a class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a>Settings</a></li>
                            <li><a>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <main class="bg-gray-300 p-4 h-full w-full">
                <slot />
            </main>
        </section>
        <section class="drawer-side">
            <label
                for="my-drawer-2"
                aria-label="close sidebar"
                class="drawer-overlay"
            ></label>
            <ul
                class="menu bg-base-200 min-h-full w-60 p-4 text-base-content text-base"
            >
                <li>
                    <img
                        src="../../media/logo-horizontal.svg"
                        class="w-48 mt-5 mb-10"
                    />
                </li>
                <li>
                    <Link href="/dashboard">
                        <span>
                            <img src="../../media/icons/home.svg" />
                        </span>
                        <span>Dashboard</span>
                    </Link>
                </li>
                <li>
                    <Link href="/inventory">
                        <span>
                            <img src="../../media/icons/sales.svg" />
                        </span>
                        <span>Inventory</span>
                    </Link>
                </li>
                <li>
                    <Link href="/reports">
                        <span>
                            <img src="../../media/icons/statistics.svg" />
                        </span>
                        <span>Reports</span>
                    </Link>
                </li>
                <li>
                    <Link href="/suppliers">
                        <span>
                            <img src="../../media/icons/user.svg" />
                        </span>
                        <span>Suppliers</span>
                    </Link>
                </li>
                <li>
                    <Link href="/orders">
                        <span>
                            <img src="../../media/icons/bag.svg" />
                        </span>
                        <span>Orders</span>
                    </Link>
                </li>
                <li>
                    <Link href="/stores">
                        <span>
                            <img src="../../media/icons/list.svg" />
                        </span>
                        <span>Manage Store</span>
                    </Link>
                </li>
            </ul>
        </section>
    </section>
</template>
