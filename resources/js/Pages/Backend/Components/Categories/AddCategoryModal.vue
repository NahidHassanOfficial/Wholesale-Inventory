<script setup>

</script>

<template>
    <dialog id="addCategory" class="modal">
        <div class="modal-box">
            <div class=" bg-base-100 p-3 rounded-lg shadow-sm">
                <h1 class=" text-xl font-semibold  mb-5">New Category</h1>
                <div class="grid grid-cols-1 justify-around gap-5 pb-5">

                    <div class="flex justify-center items-center space-x-5">
                        <div class="h-24 w-24 border-2 border-dashed border-gray-400 rounded-2xl"></div>
                        <label for="productImage" class="h-24 flex flex-col justify-center items-center ">
                            <p>Drag image here</p>
                            <p> or</p>
                            <p class="text-blue-500">Browse image</p>
                        </label>
                        <input type="file" accept="image/*" class="hidden" id="productImage">
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Category Name</label>
                        <input type="text" placeholder="Enter product name" class="input input-bordered w-full" />
                    </div>

                    <div class="flex justify-center items-center">
                        <label class="w-52 font-medium">Supplier</label>
                        <select class="select select-bordered w-full" placeholder="Select category">
                            <option disabled selected>Select Supplier</option>
                            <option value="electronics">Electronics</option>
                            <option value="fashion">Fashion</option>
                            <option value="groceries">Groceries</option>
                            <option value="beauty">Beauty Categorys</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end space-x-3">
                    <button class="btn bg-white text-gray-500"
                        onclick="document.getElementById('addCategory').close()">Discard</button>
                    <button class="btn bg-blue-500 text-white">Add Category</button>
                </div>
            </div>
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>Close</button>
        </form>
    </dialog>

</template>