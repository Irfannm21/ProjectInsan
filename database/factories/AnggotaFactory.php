<?php

namespace Database\Factories;

use App\Models\Anggota;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnggotaFactory extends Factory
{
   
    protected $model = Anggota::class;
 public function definition()
    {
        return [
            'nik' => $this->faker->unique()->numerify('####'),
            "nama" => $this->faker->firstName,
            "saldo" => $this->faker->numberBetween(1000000*20)*10,
        ];
    }
}
