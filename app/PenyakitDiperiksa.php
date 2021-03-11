<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenyakitDiperiksa extends Model
{
    protected $table = 'penyakit_diperiksa';
    public $primaryKey = 'id';
    public $timestamps = true;
}
