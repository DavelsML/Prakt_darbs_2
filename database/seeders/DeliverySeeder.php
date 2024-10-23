<?php

namespace Database\Seeders;

use App\Models\Delivery;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // User::factory(10)->create();
        DB::table('deliveries')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Delivery::factory()->create([
            'name' => 'DHL',
            'description' => 'This is a description.',
            'idnum' => 3,

        ]);

        Delivery::factory()->count(9)->create();
    }

}
