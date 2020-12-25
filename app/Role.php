<?php

namespace App;

use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    protected $table = 'roles';

    public function roleHasPermissions() {
        $this->hasMany(Permission::class, 'id', 'role_id');
    }
}
