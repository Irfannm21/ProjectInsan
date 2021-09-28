<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = ["divisi_id","nama"];

    public function Memo()
    {
        return $this->hasMany('App/Models/Memo');
    }

    public function User()
    {
        return $this->hasMany('App/Models/User');
    }
}
