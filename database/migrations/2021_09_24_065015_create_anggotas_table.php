<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotasTable extends Migration
{

    public function up()
    {
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->char('nik',4)->unique();
            $table->string('nama');
            $table->bigInteger('saldo');
            $table->timestamps();
        });
    }   

    
    public function down()
    {
        Schema::dropIfExists('anggotas');
    }
}
