<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;
    protected $fillable = ["nomor","tanggal","dari","kepada","perihal","content"];


    public function Divisi()
    {
        return $this->belongsTo('App\Models\Divisi');
    }


}