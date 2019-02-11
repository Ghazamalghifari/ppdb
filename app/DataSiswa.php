<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    //
    protected $fillable = ['id','id_siswa','nisn','nomor_sttb','nama','jenis_kelamin','nama_sekolah','alamat_sekolah','kompetisi_bakat','nama_ayah','ttl_ayah','agama_ayah','pekerjaan_ayah','alamat_ayah','no_ayah','nama_ibu','ttl_ibu','agama_ibu','pekerjaan_ibu','alamat_ibu','no_ibu','foto_kk','foto_rapot','foto_biodata_rapot','foto_siswa','status'];
}
