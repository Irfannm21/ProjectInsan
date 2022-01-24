<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PinjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pinjaman::factory()->count(5)->create();
    }
}
