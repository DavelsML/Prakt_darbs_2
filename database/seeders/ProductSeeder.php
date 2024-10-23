<?php

namespace Database\Seeders;

use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('products')->truncate();

        Product::factory()->create([
            'name' => 'Test Product',
            'qty' => 4,
            'price' => 70.42,
            'description' => 'This is a description.',
            'delivery' => 3,

        ]);

        Product::factory()->count(49)->create();
    }

}
