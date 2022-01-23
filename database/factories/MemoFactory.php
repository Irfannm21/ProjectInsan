<?php

namespace Database\Factories;

use App\Models\memo;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = memo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nomor" => "01/01/TEST",
            "tanggal"   => "28/09/2021",
            "dari"      => "Engineering",
            "kepada"    => "Umum & Personalia",
            "Perihal"   => "Masuk Kerja",
            "content"   => "Test Memo"
        ];
    }
}
