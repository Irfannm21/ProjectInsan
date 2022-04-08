<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_karyawans', function (Blueprint $table) {
            $table->id();
            $table->char('kode',4)->unique();
            $table->string('id_finger');
            $table->string('nik');
            $table->string('nama');
            $table->string('ektp');
            $table->string('no_kpj');
            $table->string('no_npwp');
            $table->string('no_kk');
            $table->string('no_inhealt');
            $table->string('jenis_inhealt');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status_nikah');
            $table->string('alamat');
            $table->string('alamat_baru');
            $table->string('no_telepon');
            $table->string('no_hp');
            $table->string('email');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('pengupahan');
            $table->string('gol_darah');
            $table->string('bagian');
            $table->string('departemen');
            $table->string('jabatan');
            $table->string('tmk');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('serikat_pekerja');
            $table->string('status_pegawai');
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
        Schema::dropIfExists('master_karyawans');
    }
}
