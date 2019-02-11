<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiPendaftaran extends Model
{
    //
    protected $fillable = ['id','id_siswa','nama_pengirim','nama_bank','foto_bukti','created_at'];
}
