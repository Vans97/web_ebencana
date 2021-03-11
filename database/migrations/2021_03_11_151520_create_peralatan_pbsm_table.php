<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralatanPbsmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan_pbsm', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tarikh_lapor');
            $table->String('peralatan_jajahan');
                $table->foreign('peralatan_jajahan')->references('kod')->on('jajahan');
            $table->String('peralatan_daerah');
                $table->foreign('peralatan_daerah')->references('kod')->on('daerah');
            $table->String('peralatan_pemindahan');
                $table->foreign('peralatan_pemindahan')->references('lkod')->on('pusat_pemindahan');
            $table->String('peralatan');
            $table->String('kuantiti');
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
        Schema::dropIfExists('peralatan_pbsm');
    }
}
