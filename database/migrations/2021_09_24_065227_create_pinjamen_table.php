<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nik')->unique();
            $table->foreign('nik')->references('id')->on('anggotas');
            $table->unsignedBigInteger('jenis_pinjaman')->unique();
            $table->foreign('jenis_pinjaman')->references('id')->on('jenis_transaksis');
            $table->date('tanggal');
            $table->integer('jumlah_pinjaman');
            $table->integer('angsuran');
            $table->integer('bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjamen');
    }
}
