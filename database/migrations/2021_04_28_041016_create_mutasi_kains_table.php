<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutasiKainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutasi_kains', function (Blueprint $table) {
            $table->id();
            $table->string('mutasi_id')->unique();
            $table->int('jenis_transaksi');
            $table->date('tanggal');
            $table->string('kain_id');
            $table->bigInt('jumlah');
            $table->int('pcs');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutasi_kains');
    }
}
