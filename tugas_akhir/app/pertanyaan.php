<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    //
    protected $table = "pertanyaan";
    protected $fillable = ['judul','konten','gambar', "kategori_id"];
}
