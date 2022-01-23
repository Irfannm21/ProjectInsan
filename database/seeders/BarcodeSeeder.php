<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Barcode::factory()->count(20)->create();
    }
}
