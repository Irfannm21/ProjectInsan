<?php

namespace Database\Factories;

use App\Models\Barcode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class BarcodeFactory extends Factory
{

    protected $model = Barcode::class;


    public function definition(){
        $expired       = $this->faker->dateTimeInInterval('2025-01-01',"+5 years");
        $production    = $this->faker->dateTimeInInterval('2021-01-01','+1 years');
        return [

            'part_number'   => $this->faker->bothify("0000000000BFANTR##"),
            "expired"       => $expired->format('dmy'),
            "production"    => $production->format('dmy'),
            "pallet_number" => $this->faker->numerify("###"),
            "quality"       => $this->faker->randomFloat(0,1),
            "quantity"      => $this->faker->numerify("###"),
            "material"      => "BAHAN TEST SUPPLY 01",
            "weight"        => $this->faker->numerify("###"),
            "gg_po"        => $this->faker->numerify("###"),
            "batch"         => $this->faker->numerify("0##"),
        ];
    }
}
