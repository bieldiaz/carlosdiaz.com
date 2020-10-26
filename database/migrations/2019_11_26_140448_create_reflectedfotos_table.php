<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReflectedfotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reflectedfotos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_foto_reflected');
            $table->string('descripcio_reflected');
            $table->string('image_reflected');
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
        Schema::dropIfExists('reflectedfotos');
    }
}
