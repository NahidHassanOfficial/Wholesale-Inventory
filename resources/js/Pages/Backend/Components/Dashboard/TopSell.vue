<script setup>

</script>

<template>
    <section class="col-span-2 card card-compact bg-base-100 shadow-xl">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <h2 class="card-title">Top Selling Stock</h2>
                <Link href="#" class="text-primary hover:underline">
                See All
                </Link>
            </div>

            <div class="mt-1 overflow-x-auto">
                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Sold Quantity</th>
                        <th>Remaining Quantity</th>
                        <th>Price</th>
                    </tr>

                    <tr>
                        <th>Surf Excel</th>
                        <td>30</td>
                        <td>12</td>
                        <td>₹ 100</td>
                    </tr>
                    <tr>
                        <th>Rin</th>
                        <td>21</td>
                        <td>15</td>
                        <td>₹ 120</td>
                    </tr>
                    <tr>
                        <th>Surf Excel</th>
                        <td>30</td>
                        <td>12</td>
                        <td>₹ 100</td>
                    </tr>
                    <tr>
                        <th>Rin</th>
                        <td>21</td>
                        <td>15</td>
                        <td>₹ 120</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</template>
