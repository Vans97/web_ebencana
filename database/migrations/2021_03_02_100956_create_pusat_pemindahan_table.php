<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePusatPemindahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pusat_pemindahan', function (Blueprint $table) {
            
            $table->String('lkod')->primary();
            $table->String('pjajahan');
                $table->foreign('pjajahan')->references('kod')->on('jajahan');
            $table->String('pdaerah');
                $table->foreign('pdaerah')->references('kod')->on('daerah');
            $table->String('nama');
            $table->integer('had');
            $table->String('keterangan');
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
        Schema::dropIfExists('pusat_pemindahan');
    }
}
