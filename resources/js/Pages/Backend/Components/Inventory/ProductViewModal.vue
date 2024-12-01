<script setup>
import EditProductModal from './EditProductModal.vue';

</script>

<template>
    <dialog id="productView" class="modal">
        <div class="modal-box max-w-full">
            <button onclick="document.getElementById('productView').close()"
                class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            <div class="max-w-screen-xl mx-auto p-6">
                <header class="flex justify-between items-center border-b pb-4 mb-6">
                    <h1 class="text-lg font-semibold">Maggi</h1>
                    <div class="flex space-x-4">
                        <button onclick="editProduct.showModal()"
                            class="px-4 py-2 text-sm text-gray-700 border rounded-lg hover:bg-gray-100">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="px-4 py-2 text-sm text-gray-700 border rounded-lg hover:bg-gray-100">
                            <i class="fas fa-download"></i> Download
                        </button>
                    </div>
                </header>

                <div class="grid grid-cols-3 gap-8">
                    <!-- Left Section -->
                    <div class="col-span-2">
                        <nav class="flex space-x-6 mb-6 text-sm font-medium text-gray-500">
                            <a href="#" class="text-blue-500 border-b-2 border-blue-500 pb-2">Overview</a>
                            <a href="#">Purchases</a>
                            <a href="#">Adjustments</a>
                            <a href="#">History</a>
                        </nav>

                        <section class="mb-8">
                            <h2 class="text-gray-700 font-semibold mb-4">Primary Details</h2>
                            <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                                <div class="flex flex-col space-y-3">
                                    <p><span class="font-medium text-gray-800">Product name:</span> Maggi</p>
                                    <p><span class="font-medium text-gray-800">Product ID:</span> 456567</p>
                                    <p><span class="font-medium text-gray-800">Product category:</span> Instant food
                                    </p>
                                    <p><span class="font-medium text-gray-800">Expiry Date:</span> 13/4/23</p>
                                    <p><span class="font-medium text-gray-800">Threshold Value:</span> 12</p>
                                </div>
                            </div>
                        </section>

                        <section class="mb-8">
                            <h2 class="text-gray-700 font-semibold mb-4">Supplier Details</h2>
                            <div class="text-sm text-gray-600 flex flex-col space-y-3">
                                <p><span class="font-medium text-gray-800">Supplier name:</span> Ronald Martin</p>
                                <p><span class="font-medium text-gray-800">Contact Number:</span> 98789 86757</p>
                            </div>
                        </section>

                        <section>
                            <h2 class="text-gray-700 font-semibold mb-4">Stock Locations</h2>
                            <table class="w-full border-t text-sm text-gray-600">
                                <thead>
                                    <tr class="text-left">
                                        <th class="py-2 font-medium text-gray-800">Store Name</th>
                                        <th class="py-2 font-medium text-gray-800 text-right">Stock in hand</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-2">Sulur Branch</td>
                                        <td class="py-2 text-right text-blue-500">15</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Singanallur Branch</td>
                                        <td class="py-2 text-right text-blue-500">19</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>

                    <!-- Right Section -->
                    <div class="col-span-1">
                        <div class="flex justify-center mb-8">
                            <div
                                class="w-48 h-48 border-dashed border-2 border-gray-300 flex items-center justify-center">
                                <img :src="'/images/products/nestle-maggi-noodles.webp'" alt="Product Image"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <div class="text-sm text-gray-600">
                            <p class="flex justify-between mb-2">
                                <span class="font-medium text-gray-800">Opening Stock:</span>
                                <span>40</span>
                            </p>
                            <p class="flex justify-between mb-2">
                                <span class="font-medium text-gray-800">Remaining Stock:</span>
                                <span>34</span>
                            </p>
                            <p class="flex justify-between mb-2">
                                <span class="font-medium text-gray-800">On the way:</span>
                                <span>15</span>
                            </p>
                            <p class="flex justify-between">
                                <span class="font-medium text-gray-800">Threshold value:</span>
                                <span>12</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <form method="dialog" class="modal-backdrop">
            <button>Close</button>
        </form>
    </dialog>
    <EditProductModal />
</template>