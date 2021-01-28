<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVariableToAgensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('agensi', function (Blueprint $table) {
            $table->String('talian');
            $table->String('user_id');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agensi', function (Blueprint $table) {
            $table->dropColumn('talian');
            $table->dropColumn('user_id');
        });
    }
}
