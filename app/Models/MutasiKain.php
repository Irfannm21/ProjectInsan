<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MutasiKain extends Model
{
    use HasFactory;

    protected $fillable = ['mutasi_id','jenis_transaksi','tanggal','kain_id','jumlah','pcs','keterangan'];

    public function StockKains()
    {
        return $this->belongsTo('App\Models\StockKain');
    }
    
}
