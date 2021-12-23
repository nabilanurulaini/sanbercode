<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    //
    protected $table = 'profile';
    public $timestamps = false;
    protected $fillable = ['umur','bio','alamat','user_id'];
}
