<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Anggota::factory()->count(5)->create();
    }
}
