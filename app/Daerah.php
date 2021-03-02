<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $table = 'daerah';
    public $primaryKey = 'kod';
    public $incrementing = false;
    public $timestamps = true;

}
