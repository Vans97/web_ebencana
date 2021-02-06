<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampung extends Model
{
    protected $table = 'kampung';
    public $primaryKey = 'id';
    public $timestamps = true;
}
