<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoAntecedente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FotoAntecedente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->Integer('Tipo');
            $table->String('Url');
            $table->String('Nombre');
            $table->String('Descripcion');
            $table->timestamps();

            $table->foreign('IdPaciente')->references('id')->on('Paciente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FotoAntecedente');
    }
}
