<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billetes', function (Blueprint $table) {
            $table->id('id');
            $table->integer('precio');
            $table->unsignedBigInteger('idLinea');
            $table->foreign('idLinea')->references('id')->on('lineas');
            $table->unsignedBigInteger('idEstacion');
            $table->foreign('idEstacion')->references('id')->on('estacions');
            $table->unsignedBigInteger('idVagon');
            $table->foreign('idVagon')->references('id')->on('vagones');
            $table->unsignedBigInteger('idUsuario')->nullable();
            $table->foreign('idUsuario')->references('id')->on('users');
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
        Schema::dropIfExists('billetes');
    }
}
