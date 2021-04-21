<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    use HasFactory;
    protected $fillable = ['part_number','expired','production','pallet_number','quality','quantity','material','weight','gg_po','batch'];
}
