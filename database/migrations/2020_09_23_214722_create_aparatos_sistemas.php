<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAparatosSistemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AparatosSistemas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdConsulta');
            $table->string('Cabeza');
            $table->string('Cuello');
            $table->string('Tronco');
            $table->string('Pelvis');
            $table->string('MiembroInferior');
            $table->string('MiembroSuperior');
            $table->string('Cabello');
            $table->string('Dientes');
            $table->string('Lengua');
            $table->string('Pulso');
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
        Schema::dropIfExists('AparatosSistemas');
    }
}
