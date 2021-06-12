<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagones', function (Blueprint $table) {
            $table->id('id');
            $table->integer('Capacidad');
            $table->unsignedBigInteger('idLinea');
            $table->foreign('idLinea')->references('id')->on('lineas');
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
        Schema::dropIfExists('vagones');
    }
}
