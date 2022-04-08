<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masterKaryawan extends Model
{
    use HasFactory;

    protected $fillable = ["kode", "id_finger",	"nik", "nama",	"ektp",	"no_kpj", "no_npwp", "no_kk", "no_inhealt",	"jenis_inhealt", "tempat_lahir", "tanggal_lahir", "jenis_kelamin", "status_nikah",	"alamat","alamat_baru",	"no_telepon","no_hp","email","bank","no_rekening","pengupahan",	"gol_darah","bagian", "departemen",	"jabatan",	"tmk",	"shift", "agama", "pendidikan",	"serikat_pekerja",	"status"
];
}
