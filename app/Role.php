<?php

namespace App;

class Role extends \Spatie\Permission\Models\Role
{
    protected $table = 'roles';

    public function roleHasPermissions() {
        $this->hasMany(Permission::class, 'id', 'role_id');
    }
}
