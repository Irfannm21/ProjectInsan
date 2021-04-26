<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemoMasuk extends Model
{
    use HasFactory;

    protected $fillable = ['memo_id','content'];
}
