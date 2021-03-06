<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jajahan extends Model
{
    protected $table = 'jajahan';
    // public $primaryKey = 'id';
    public $primaryKey = 'kod';
    public $incrementing = false;
    public $timestamps = true;

    public function getDueDateAttribute($value) {
        return $value->format('Y-m-d');
    }
}
