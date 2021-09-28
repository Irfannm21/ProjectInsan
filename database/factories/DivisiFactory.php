<?php

namespace Database\Factories;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Factories\Factory;

class DivisiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Divisi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                "divisi_id" => 'KD01',
                'nama'  => "Marketing",
            ],
            [
                "divisi_id" => 'KD02',
                'nama'  => "Accounting",
            ],
            [
                "divisi_id" => 'KD03',
                'nama'  => "Umum & Personalia",
            ],
            [
                "divisi_id" => 'KD04',
                'nama'  => "Logistik",
            ],
            [
                "divisi_id" => 'KD05',
                'nama'  => "Engineering",
            ],
            [
                "divisi_id" => 'KD06',
                'nama'  => "Dyeing Finishing",
            ],
            [
                "divisi_id" => 'KD07',
                'nama'  => "Weaving",
            ]
            
        ];
    }
}
