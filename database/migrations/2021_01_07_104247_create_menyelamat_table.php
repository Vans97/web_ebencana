<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenyelamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menyelamat', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tarikh');
            $table->String('jajahan');
            $table->String('lokasi');
            $table->String('tempat_pemindahan');
            $table->String('keterangan');
            $table->integer('keluarga');
            $table->integer('lelaki');
            $table->integer('wanita');
            $table->integer('kanak_lelaki');
            $table->integer('kanak_perempuan');
            $table->String('pengesahan');
            $table->String('user_id');
            $table->integer('total');
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
        Schema::dropIfExists('menyelamat');
    }
}
