<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    use HasFactory;

    protected $fillable = ["nik","jenis_pinjaman","tanggal","jumlah_pinjaman","angsuran","bayar"];
}
