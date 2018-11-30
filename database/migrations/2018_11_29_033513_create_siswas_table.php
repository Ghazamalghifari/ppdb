<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('nisn');
            $table->string('nama');
            $table->string('kelas');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('jurusan');
            $table->string('keahlian');
            $table->string('instragram');
            $table->string('email');
            $table->string('facebook');
            $table->string('prestasi');
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
        Schema::dropIfExists('siswas');
    }
}
