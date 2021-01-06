<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToKemalangankemasukkan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kemalangankemasukkan', function (Blueprint $table) {
            $table->string('pengesahan');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kemalangankemasukkan', function (Blueprint $table) {
            $table->dropColumn('pengesahan');
            
        });
    }
}
