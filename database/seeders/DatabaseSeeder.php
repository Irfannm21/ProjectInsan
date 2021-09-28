<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(123);

        $this->call(BarcodeSeeder::class);
        $this->call(AnggotaSeeder::class);
        
    }
}
