<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PusatPemindahan extends Model
{
    protected $table = 'pusat_pemindahan';
    public $primaryKey = 'id';
    public $timestamps = true;
}
