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
            $table->unsignedBigInteger('anggota_id')->unique();
            $table->foreign('anggota_id')->references('id')->on('anggotas');
            $table->string('jenis_transaksi');
            $table->date('tanggal');
            $table->BigInteger('jumlah_pinjaman');
            $table->BigInteger('angsuran');
            $table->BigInteger('bayar');
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
