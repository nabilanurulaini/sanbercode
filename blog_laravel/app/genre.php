<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    //
    protected $table = 'genre';
    public $timestamps = false;
    protected $fillable = ['nama'];
}
