<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    protected $table = "jawaban";
    protected $fillable = ['jawaban', 'pertanyaan_id'];
}
