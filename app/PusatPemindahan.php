<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PusatPemindahan extends Model
{
    protected $table = 'pusat_pemindahan';
    public $primaryKey = 'lkod';
    public $incrementing = false;
    public $timestamps = true;
}
