<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BilPetugas extends Model
{
    protected $table = 'bilangan_petugas';
    public $primaryKey = 'id';
    public $timestamps = true;
}
