<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockKain extends Model
{
    use HasFactory;

    protected $fillable = ['kain_id','mutasi_id','jumlah','pcs'];


    public function JenisKains()
    {
        return $this->hasMany('App\Models\JenisKain');
    }

    public function MutasiKain()
    {
        return $this->hasMany('App\Models\MutasiKain');
    }
}
