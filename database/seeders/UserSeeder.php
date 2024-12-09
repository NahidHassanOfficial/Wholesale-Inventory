<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => fake()->name(),
            'email' => 'admin@admin',
            'phone' => fake()->unique()->phoneNumber(),
            'address' => fake()->address(),
            'password' => bcrypt('password'),
        ]);

        // $number = 10;
        // for ($i = 0; $i < $number; $i++) {
        //     User::create([
        //         'name' => fake()->name(),
        //         'email' => fake()->unique()->safeEmail(),
        //         'phone' => fake()->unique()->phoneNumber(),
        //         'address' => fake()->address(),
        //         'password' => bcrypt('password'),
        //     ]);
        // }
    }
}
