<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaerahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daerah', function (Blueprint $table) {
            $table->String('kod')->primary();
            $table->String('djajahan');
                $table->foreign('djajahan')->references('kod')->on('jajahan');
            $table->String('nama');
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
        Schema::dropIfExists('daerah');
    }
}
