<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

class SeedRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $datas = [
            [
                'code' => 'a_magroup',
                'permission' => [
                    'a_magroup_view',
                    'a_magroup_search',
                    'a_magroup_create',
                    'a_magroup_update',
                    'a_magroup_delete'
                ],
            ],
            [
                'code' => 'a_mauser',
                'permission' => [
                    'a_mauser_view',
                    'a_mauser_search',
                    'a_mauser_create',
                    'a_mauser_update',
                    'a_mauser_delete'
                ],
            ],
            [
                'code' => 'a_maaccess',
                'permission' => [
                    'a_maaccess_view',
                    'a_maaccess_search',
                    'a_maaccess_create',
                    'a_maaccess_update',
                    'a_maaccess_delete'
                ],
            ],
        ];

        foreach ($datas as $data) {
            $role = Role::findByName($data['code']);

            foreach ($data['permission'] as $perm) {
                $role->givePermissionTo($perm);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
