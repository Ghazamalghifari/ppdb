<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $fillable = ['id','nisn','nama','kelas','ttl','alamat','jurusan','keahlian','instragram','email','facebook','prestasi'];
}
