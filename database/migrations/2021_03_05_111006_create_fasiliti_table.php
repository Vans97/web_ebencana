<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasilitiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasiliti', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tarikh_lapor');
            $table->String('fjajahan');
                $table->foreign('fjajahan')->references('kod')->on('jajahan');
            $table->String('fdaerah');
                $table->foreign('fdaerah')->references('kod')->on('daerah');
            $table->String('fpemindahan');
                $table->foreign('fpemindahan')->references('lkod')->on('pusat_pemindahan');
            $table->String('lokasi');
            $table->String('keterangan');
            $table->String('fasiliti_terlibat');
            $table->String('jenis_kerosakan');
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
        Schema::dropIfExists('fasiliti');
    }
}
