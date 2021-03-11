<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyakitDiperiksaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit_diperiksa', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tarikh_lapor');
            $table->String('penyakit_jajahan');
                $table->foreign('penyakit_jajahan')->references('kod')->on('jajahan');
            $table->String('penyakit_daerah');
                $table->foreign('penyakit_daerah')->references('kod')->on('daerah');
            $table->String('penyakit_pemindahan');
                $table->foreign('penyakit_pemindahan')->references('lkod')->on('pusat_pemindahan');
            $table->String('bil_penyakit_berjangkit');
            $table->String('bil_penyakit_tidak_berjangkit');
            $table->String('bil_kecederaan');
            $table->String('bil_kematian');
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
        Schema::dropIfExists('penyakit_diperiksa');
    }
}
