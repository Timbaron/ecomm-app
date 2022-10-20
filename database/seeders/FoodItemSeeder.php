<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run factory
        \App\Models\FoodItem::factory(100)->create();
    }
}
