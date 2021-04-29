<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockKainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_kains', function (Blueprint $table) {
            $table->id();
            $table->string('kain_id')->references('id')->on('jenis_kains');
            $table->string('mutasi_id')->references('id')->on('mutasi_kains');
            $table->string('grade');
            $table->integer('jumlah');
            $table->integer('pcs');
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
        Schema::dropIfExists('stock_kains');
    }
}
