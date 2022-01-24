<?php

namespace Database\Factories;

use App\Models\Pinjaman;
use Illuminate\Database\Eloquent\Factories\Factory;

class PinjamanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pinjaman::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $jenis_transaksi = ["simpan","pinjam","bayar"];
        return [
            'anggota_id'         => $this->faker->unique()->numberBetween(1,5),
            "jenis_transaksi"    => $this->faker->randomElement($jenis_transaksi),
            "tanggal"            => $this->faker->date(),
            'jumlah_pinjaman'    => $this->faker->numberBetween(100000*10)*10,
            'angsuran'           => $this->faker->numberBetween(1,18),
            'bayar'              => $this->faker->numberBetween(100*10)*10,
            
        ];
    }
}
