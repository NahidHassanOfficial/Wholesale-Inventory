<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = ['store-1.png', 'store-2.jpg'];

        $number = 10;
        for ($i = 0; $i < $number; $i++) {
            Store::create([
                'user_id' => 1,
                'name' => fake()->name(),
                'address' => fake()->address(),
                'phone' => fake()->phoneNumber(),
                'image' => $images[array_rand($images)],
            ]);
        }
    }
}
