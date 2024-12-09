<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $number = 10;
        for ($i = 0; $i < $number; $i++) {
            Category::create([
                'user_id' => 1,
                'name' => fake()->unique()->word(),
            ]);
        }
    }
}
