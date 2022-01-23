<?php

namespace Database\Factories;

use App\Models\JenisTransaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class JenisTransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JenisTransaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            [
                "jenis"         => 1,
                "Keterangan"    => "Simpanan Pokok"
            ],
            [
                "jenis"         => 2,
                "Keterangan"    => "Pinjam"
            ],
            [
                "jenis"         => 3,
                "Keterangan"    => "Bayar Pinjaman"
            ],
        ];
    }
}
