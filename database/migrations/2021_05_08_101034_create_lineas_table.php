<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('idOrigen')->unique();
            $table->string('idDestino')->unique();
            $table->dateTime('HoraSalida');
            $table->dateTime('Horallegada');
            $table->unsignedBigInteger('idEstacion');
            $table->foreign('idEstacion')->references('id')->on('estacions');
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
        Schema::dropIfExists('lineas');
    }
}
