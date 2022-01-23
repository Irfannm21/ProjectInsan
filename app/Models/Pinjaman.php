<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    protected $fillable = ["nik","jenis_transaksi","jenis_pinjaman","tanggal","jumlah_pinjaman","angsuran","bayar"];

        public function anggota()
        {
            return $this->belongsTo('App\Models\Pinjaman');
        }

        public function jenisTransaksi(){
            return $this->belongsTo('App\Models\JenisTransaksi');
        }
}
