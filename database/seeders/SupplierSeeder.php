<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['radhuni.jpg', 'pran.jpg', 'nestle.png', 'fresh.png', 'bd-food.png'];

        $number = 10;
        for ($i = 0; $i < $number; $i++) {
            Supplier::create([
                'user_id' => 1,
                'name' => fake()->name(),
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
                'takes_return' => fake()->boolean(),
                'image' => $images[array_rand($images)],
            ]);
        }

    }
}
