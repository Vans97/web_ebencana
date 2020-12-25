<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHasPermission extends Model
{
    protected $table = 'model_has_permissions';

    public function permissions()
    {
        return $this->hasOne(Permission::class, 'id', 'permission_id');
    }
}
