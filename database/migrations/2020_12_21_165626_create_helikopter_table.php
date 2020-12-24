<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelikopterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helikopter', function (Blueprint $table) {
            $table->id();
            $table->String('hjajahan');
            $table->String('lokasi');
            $table->String('latitude');
            $table->String('longitude');
            $table->String('nota');
            $table->String('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helikopter');
    }
}
