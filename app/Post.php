<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
    protected $fillable = ['id','judul_artikel','gambar_artikel','isi_artikel','created_at'];
}
