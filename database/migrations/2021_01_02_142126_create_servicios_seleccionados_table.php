<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosSeleccionadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ServiciosSeleccionado', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdServicio');
            $table->timestamps();

            $table->foreign('IdServicio')->references('id')->on('Servicio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ServiciosSeleccionado');
    }
}
