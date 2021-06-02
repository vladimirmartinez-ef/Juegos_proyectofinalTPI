<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegoClavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego_claves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('idjuegos')->unsigned();
            $table->bigInteger('idclaves')->unsigned();
            $table->boolean('estadoclave')->default(true);
            $table->foreign('idjuegos')->references('id')->on('juegos');
            $table->foreign('idclaves')->references('idclave')->on('claves');
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
        Schema::dropIfExists('juego_claves');
    }
}
