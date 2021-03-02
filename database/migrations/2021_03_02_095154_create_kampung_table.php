<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampung', function (Blueprint $table) {
            $table->String("lkod")->primary();
            $table->String("kjajahan");
                $table->foreign('kjajahan')->references('kod')->on('jajahan');
            $table->String("kdaerah");
                $table->foreign("kdaerah")->references("kod")->on('daerah');
            $table->String("nama");
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
        Schema::dropIfExists('kampung');
    }
}
