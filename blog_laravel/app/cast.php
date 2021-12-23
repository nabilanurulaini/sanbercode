<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cast extends Model
{
    //
    protected $table = 'cast';
    public $timestamps = false;
    protected $fillable = ['nama','umur','bio'];
}
