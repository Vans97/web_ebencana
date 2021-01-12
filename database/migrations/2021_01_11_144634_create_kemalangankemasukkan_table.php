<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemalangankemasukkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemalangankemasukkan', function (Blueprint $table) {
            $table->id();
            $table->dateTime('t_lapor');
            $table->String('no_laporan');
            $table->String('nama_balai');
            $table->String('kemalangan');
            $table->String('status');
            $table->dateTime('t_dijumpai');
            $table->String('lokasi');
            $table->String('jajahan');
            $table->String('nama_mangsa');
            $table->String('ic');
            $table->String('bangsa');
            $table->String('jantina');
            $table->String('alamat');
            $table->String('user_id');
            $table->String('pengesahan');
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
        Schema::dropIfExists('kemalangankemasukkan');
    }
}
