<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemasukkanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemasukkan', function (Blueprint $table) {
            $table->id();
            $table->String('fasa');
            $table->String('nota');
            $table->String('t_mohon');
            $table->String('t_sampai');
            $table->String('barang');
            $table->String('uom');
            $table->String('kuantiti');
            $table->decimal('harga',9,3);
            $table->decimal('total',9,3);
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
        Schema::dropIfExists('kemasukkan');
    }
}
