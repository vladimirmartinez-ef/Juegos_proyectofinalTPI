<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juegos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombrejuego', 100);
            $table->string('descripcion', 800);
            $table->string('requerimientos', 600);
            $table->string('sistema', 100);
            $table->bigInteger('idclasificacion')->unsigned();
            $table->string('estado', 100);
            $table->string('proveedor', 100);
            $table->float('precio');
            $table->string('image', 1000);
            $table->foreign('idclasificacion')->references('idclasificacion')->on('clasificacions');
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
        Schema::dropIfExists('juegos');
    }
}
