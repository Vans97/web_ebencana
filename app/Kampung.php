<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampung extends Model
{
    protected $table = 'kampung';
    public $primaryKey = 'lkod';
    public $incrementing = false;
    public $timestamps = true;
}
