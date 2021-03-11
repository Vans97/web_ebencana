<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlinikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klinik', function (Blueprint $table) {
            $table->String("kod")->primary();
            $table->String("kjajahan");
                $table->foreign('kjajahan')->references('kod')->on('jajahan');
            $table->String("kdaerah");
                $table->foreign("kdaerah")->references("kod")->on('daerah');
            $table->String("nama");
            $table->String("no_talian");
            $table->String("user_id");
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
        Schema::dropIfExists('klinik');
    }
}
