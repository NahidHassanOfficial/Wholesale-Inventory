<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'bdfood-chips.jpg',
            'fresh-milk-powder.jpg',
            'nestle-maggi-noodles.webp',
            'pran-pomegranate-fruit-drink.webp',
            'tata-salt.jpg',
            'fresh-flour-atta.webp',
            'ispahani-mirzapore-leaf-tea.webp',
            'pran-liquid-milk.jpg',
            'radhuni-chilli-powder.webp',
        ];

        $categoryIds = Category::pluck('id')->toArray();
        $supplierIds = Supplier::pluck('id')->toArray();

        $number = 20;
        for ($i = 0; $i < $number; $i++) {
            Product::create([
                'user_id' => 1,
                'category_id' => $categoryIds[array_rand($categoryIds)],
                'supplier_id' => $supplierIds[array_rand($supplierIds)],
                'name' => fake()->word(),
                'quantity' => fake()->numberBetween(1, 100),
                'unit' => fake()->numberBetween(1, 5) . ' ' . 'kg',
                'buying_price' => fake()->numberBetween(44, 300),
                'selling_price' => fake()->numberBetween(50, 500),
                'expiry_date' => fake()->date(),
                'threshold_qty' => fake()->numberBetween(10, 20),
                'image' => $images[array_rand($images)],
            ]);
        }
    }
}
