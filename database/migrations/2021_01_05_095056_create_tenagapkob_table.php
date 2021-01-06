<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagapkobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenagapkob', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->String('pkob');
            $table->integer('pengawal');
            $table->integer('awam');
            $table->integer('petugas');
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
        Schema::dropIfExists('tenagapkob');
    }
}
