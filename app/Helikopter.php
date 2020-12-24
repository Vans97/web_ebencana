<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helikopter extends Model
{
    protected $table = 'helikopter';
    public $primaryKey = 'id';
    public $timestamps = true;
}
