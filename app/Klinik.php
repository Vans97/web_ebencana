<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    protected $table = 'klinik';
    public $primaryKey = 'kod';
    public $incrementing = false;
    public $timestamps = true;
}
