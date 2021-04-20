<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('idfactura');
            $table->bigInteger('idjuegos')->unsigned();
            $table->bigInteger('idclaves')->unsigned();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('email', 300);
            $table->string('pagocancelado');
            $table->foreign('idjuegos')->references('idjuegos')->on('juego_claves');
            $table->foreign('idclaves')->references('idclaves')->on('juego_claves');
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
        Schema::dropIfExists('facturas');
    }
}
