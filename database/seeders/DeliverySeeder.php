<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Delivery;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('deliveries')->truncate();
        // Create 5 deliveries
        Delivery::factory()->count(5)->create();
    }
}

