<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_siswa');
            $table->string('nisn');
            $table->string('nomor_sttb');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('nama_sekolah');
            $table->string('alamat_sekolah');
            $table->string('kompetisi_bakat');
            $table->string('nama_ayah');
            $table->string('ttl_ayah');
            $table->string('agama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('alamat_ayah');
            $table->string('no_ayah');
            $table->string('nama_ibu');
            $table->string('ttl_ibu');
            $table->string('agama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('alamat_ibu');
            $table->string('no_ibu');
            $table->string('foto_kk');
            $table->string('foto_rapot');
            $table->string('foto_biodata_rapot');
            $table->string('foto_siswa');
            $table->string('status')->nullable();
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
        Schema::dropIfExists('data_siswas');
    }
}
