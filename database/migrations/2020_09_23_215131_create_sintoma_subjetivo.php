<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSintomaSubjetivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SintomaSubjetivo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdConsulta');
            $table->string('Nombre');
            $table->string('Descripcion');
            $table->timestamps();

            $table->foreign('IdConsulta')->references('id')->on('Consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SintomaSubjetivo');
    }
}
