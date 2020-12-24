<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    protected $table = 'aset';
    public $primaryKey = 'id';
    public $timestamps = true;
}
