<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaPacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FichaPaciente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->string('LugarResidencia')->nullable();
            $table->string('Direccion')->nullable();
            $table->Integer('Peso')->nullable();
            $table->Integer('Talla')->nullable();
            $table->Integer('SPO2')->nullable();
            $table->Integer('FC')->nullable();
            $table->Integer('FR')->nullable();
            $table->Integer('TA')->nullable();
            $table->Integer('Dextrosis')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('FichaPaciente');
    }
}
