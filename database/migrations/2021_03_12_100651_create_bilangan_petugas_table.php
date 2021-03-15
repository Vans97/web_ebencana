<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilanganPetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilangan_petugas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tarikh_lapor');
            $table->String('bjajahan');
                $table->foreign('bjajahan')->references('kod')->on('jajahan');
            $table->String('bdaerah');
                $table->foreign('bdaerah')->references('kod')->on('daerah');
            $table->String('bpemindahan');
                $table->foreign('bpemindahan')->references('lkod')->on('pusat_pemindahan');
            $table->String('bil_lelaki');
            $table->String('bil_perempuan');
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
        Schema::dropIfExists('bilangan_petugas');
    }
}
