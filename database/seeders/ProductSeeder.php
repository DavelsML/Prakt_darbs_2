<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Delivery;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->truncate();
        // Get all the deliveries
        $deliveries = Delivery::all();

        // Loop through deliveries and create products for each one
        foreach ($deliveries as $delivery) {
            Product::factory()->count(3)->create([
                'delivery_id' => $delivery->id,  // Assign each product to a delivery
            ]);
        }
    }
}

