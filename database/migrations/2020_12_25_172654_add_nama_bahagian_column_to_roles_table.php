<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddNamaBahagianColumnToRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->string('nama')->after('name');
            $table->string('bahagian')->after('nama');
        });

        DB::table('roles')->insert([
            [
                'name'       => 'a_magroup',
                'nama'       => 'Group Pengguna',
                'bahagian'   => 'Keselamatan',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'       => 'a_mauser',
                'nama'       => 'Akaun Pengguna',
                'bahagian'   => 'Keselamatan',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'       => 'a_maaccess',
                'nama'       => 'Akses Pengguna',
                'bahagian'   => 'Keselamatan',
                'guard_name' => 'web',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('roles', function (Blueprint $table) {
            //
        });
    }
}
