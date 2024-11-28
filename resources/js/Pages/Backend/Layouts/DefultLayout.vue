<script setup>
import { Link } from "@inertiajs/vue3";
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
                <div class="flex-none">
                    <div class="dropdown dropdown-end mr-5">
                        <img src="./../../media/icons/bell.svg" alt="" />
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
            <ul class="menu bg-base-200 text-base-content min-h-full w-60 p-4">
                <li>
                    <img
                        src="../../media/logo-horizontal.svg"
                        alt=""
                        class="w-48 mt-5 mb-10"
                    />
                </li>
                <li>
                    <Link href="/dashboard">
                        <span>
                            <img src="../../media/icons/home.svg" alt="" />
                        </span>
                        <span>Dashboard</span>
                    </Link>
                </li>
                <li>
                    <Link href="/inventory">
                        <span>
                            <img src="../../media/icons/sales.svg" alt="" />
                        </span>
                        <span>Inventory</span>
                    </Link>
                </li>
                <li>
                    <Link href="/reports">
                        <span>
                            <img
                                src="../../media/icons/statistics.svg"
                                alt=""
                            />
                        </span>
                        <span>Reports</span>
                    </Link>
                </li>
                <li>
                    <Link href="/suppliers">
                        <span>
                            <img src="../../media/icons/user.svg" alt="" />
                        </span>
                        <span>Suppliers</span>
                    </Link>
                </li>
                <li>
                    <Link href="/orders">
                        <span>
                            <img src="../../media/icons/bag.svg" alt="" />
                        </span>
                        <span>Orders</span>
                    </Link>
                </li>
                <li>
                    <Link href="/stores">
                        <span>
                            <img src="../../media/icons/list.svg" alt="" />
                        </span>
                        <span>Manage Store</span>
                    </Link>
                </li>
            </ul>
        </section>
    </section>
</template>
