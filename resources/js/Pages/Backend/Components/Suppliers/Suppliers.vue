<script setup>
import AddSupplierModal from './AddSupplierModal.vue';

</script>
<template>
    <div class="w-full bg-base-100 p-5 rounded-lg shadow-sm">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-gray-500 mb-5">Suppliers</h1>

            <!-- Desktop buttons - hidden on mobile -->
            <div class="hidden md:flex space-x-5">
                <button class="btn bg-blue-500 hover:bg-blue-400 text-white" onclick="addSupplier.showModal()">
                    Add Supplier
                </button>
                <details class="dropdown">
                    <summary tabindex="0" class="btn m-1 bg-transparent text-gray-500 border-2 flex p-3 space-x-3">
                        <img :src="'/icons/filter.svg'" alt="">
                        <h1>Filter</h1>
                    </summary>
                    <ul tabindex="0" class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </details>
                <button class="btn bg-transparent text-gray-500 border-2">Download All</button>
            </div>

            <!-- Mobile dropdown menu - shown only on mobile -->
            <div class="md:hidden">
                <details class="dropdown dropdown-end">
                    <summary tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z">
                            </path>
                        </svg>
                    </summary>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a class="text-gray-500 " onclick="addSupplier.showModal()">Add Product</a></li>
                        <li>
                            <details class="dropdown">
                                <summary class=" bg-transparent text-gray-500 flex p-3 space-x-3">
                                    <img :src="'/icons/filter.svg'" alt="">
                                    <h1>Filter</h1>
                                </summary>
                                <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                                    <li><a>Item 1</a></li>
                                    <li><a>Item 2</a></li>
                                </ul>
                            </details>
                        </li>
                        <li><a class="text-gray-500 ">Download All</a></li>
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
                        <th>Supplier Name</th>
                        <th>Product</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>One the way</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                    <tr>
                        <th>1</th>
                        <td>Cy Ganderton</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                        <td>Quality Control Specialist</td>
                        <td>Blue</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <AddSupplierModal />

</template>