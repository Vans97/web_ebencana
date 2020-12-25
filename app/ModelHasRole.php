<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHasRole extends Model
{
    protected $table = 'model_has_roles';

    public function roles()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
