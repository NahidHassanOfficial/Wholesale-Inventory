<script setup>

</script>

<template>
    <dialog id="newOrder" class="modal">
        <div class="modal-box">
            <div class=" bg-base-100 p-3 rounded-lg shadow-sm">
                <h1 class=" text-xl font-semibold  mb-5">New Order</h1>
                <div class="grid grid-cols-1 justify-around gap-5 pb-5">

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Category</label>
                        <select class="select select-bordered w-full" placeholder="Select category">
                            <option disabled selected>Select category</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="groceries">Groceries</option>
                            <option value="beauty">Beauty Products</option>
                        </select>
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Product</label>
                        <select class="select select-bordered w-full" placeholder="Select product">
                            <option disabled selected>Select Product</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="groceries">Groceries</option>
                            <option value="beauty">Beauty Products</option>
                        </select>
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Order Value</label>
                        <input type="text" placeholder="Enter order value" class="input input-bordered w-full" />
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Quantity</label>
                        <input type="text" placeholder="Enter quantity" class="input input-bordered w-full" />
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Unit</label>
                        <input type="text" placeholder="Enter unit (e.g., kg, ltr)"
                            class="input input-bordered w-full" />
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Date of delivery</label>
                        <input type="date" class="input input-bordered w-full" />
                    </div>
                </div>
                <div class="flex justify-end space-x-3">
                    <button class="btn bg-white text-gray-500"
                        onclick="document.getElementById('newOrder').close()">Discard</button>
                    <button class="btn bg-blue-500 text-white">New Order</button>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>Close</button>
        </form>
    </dialog>

</template>