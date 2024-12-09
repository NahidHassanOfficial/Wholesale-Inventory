<?php

namespace Database\Seeders;

use App\Http\Controllers\Backend\OrderController;
use Illuminate\Database\Seeder;
use Illuminate\Http\Request;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $number = 10;
        $jsonData = [
            "storeId" => fake()->numberBetween(1, $number),
            "orderItems" => [
                ["id" => fake()->numberBetween(1, $number - 7), "quantity" => fake()->numberBetween(1, 5)],
                ["id" => fake()->numberBetween(4, $number - 3), "quantity" => fake()->numberBetween(1, 5)],
                ["id" => fake()->numberBetween(8, $number), "quantity" => fake()->numberBetween(1, 5)],
            ],
            "discount" => fake()->randomFloat(2, 0, 50),
        ];

        // Replace the request input data with the provided data.
        $request = request();
        $request->replace($jsonData);
        $request->headers->set('id', 1);

        app(OrderController::class)->createOrder();
    }
}
