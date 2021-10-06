<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $fillable = ["nik","nama","saldo"];

    public function pinjaman()
    {
        return $this->hasMany('App\Models\Pinjaman');
    }

    
}
