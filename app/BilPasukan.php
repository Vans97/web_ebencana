<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BilPasukan extends Model
{
    protected $table = 'bilangan_pasukan';
    public $primaryKey = 'id';
    public $timestamps = true;
}
