<script setup>
import AddCategoryModal from "./AddCategoryModal.vue";
import Badge from "../Badge.vue";
</script>
<template>
    <div class="w-full bg-base-100 p-5 rounded-lg shadow-sm">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-gray-500 mb-5">Categorys</h1>

            <!-- Desktop buttons - hidden on mobile -->
            <div class="hidden md:flex space-x-5">
                <button
                    class="btn bg-blue-500 hover:bg-blue-400 text-white"
                    onclick="addCategory.showModal()"
                >
                    Add Category
                </button>
                <div
                    class="relative border-2 pe-1 border-base-200 rounded-lg hover:bg-base-300 hover:border-base-200 cursor-pointer bgSelector"
                >
                    <img
                        :src="'/icons/filter.svg'"
                        class="h-5 w-5 absolute top-1/2 left-2 transform -translate-y-1/2"
                    />
                    <select
                        class="bg-transparent ms-6 h-full w-fit px-2 focus:outline-none focus:border-none text-gray-500 bgSelect"
                    >
                        <option disabled selected>Filter</option>
                        <option>Han Solo</option>
                        <option>Greedo</option>
                    </select>
                </div>
                <button class="btn bg-transparent text-gray-500 border-2">
                    Download All
                </button>
            </div>

            <!-- Mobile dropdown menu - shown only on mobile -->
            <div class="md:hidden">
                <details class="dropdown dropdown-end">
                    <summary tabindex="0" class="btn btn-ghost btn-circle">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                            ></path>
                        </svg>
                    </summary>
                    <ul
                        tabindex="0"
                        class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52"
                    >
                        <li>
                            <a
                                class="text-gray-500"
                                onclick="addCategory.showModal()"
                                >Add Category</a
                            >
                        </li>
                        <li>
                            <div
                                class="w-fit p-0 pe-1 relative rounded-lg hover:bg-base-300 cursor-pointer bgSelector"
                            >
                                <img
                                    :src="'/icons/filter.svg'"
                                    class="h-5 w-5 absolute top-1/2 left-2 transform -translate-y-1/2"
                                />
                                <select
                                    class="bg-transparent p-2 ms-7 h-full w-fit px-2 focus:outline-none focus:border-none text-gray-500 bgSelect"
                                >
                                    <option disabled selected>Filter</option>
                                    <option>Han Solo</option>
                                    <option>Greedo</option>
                                </select>
                            </div>
                        </li>
                        <li><a class="text-gray-500">Download All</a></li>
                    </ul>
                </details>
            </div>
        </div>

        <!-- Rest of your table code remains the same -->
        <div class="overflow-x-auto">
            <table class="table table-zebra">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Category Image</th>
                        <th>Category Name</th>
                        <th>Total Products</th>
                        <th>Total Suppliers</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                    </tr>
                    <tr>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                    </tr>
                    <tr>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                    </tr>
                    <tr>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                    </tr>
                    <tr>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <AddCategoryModal />
</template>
