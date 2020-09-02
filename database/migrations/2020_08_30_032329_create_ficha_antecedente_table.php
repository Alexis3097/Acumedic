<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaAntecedenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FichaAntecedente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdFichaPaciente');
            $table->unsignedBigInteger('IdDetalleAntecedente');
            $table->timestamps();

            $table->foreign('IdFichaPaciente')->references('id')->on('FichaPaciente');
            $table->foreign('IdDetalleAntecedente')->references('id')->on('DetalleAntecedente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FichaAntecedente');
    }
}
