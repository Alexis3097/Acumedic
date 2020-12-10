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
            $table->string('LugarResidencia');
            $table->string('Direccion');
            $table->Integer('Peso');
            $table->Integer('Talla');
            $table->Integer('SPO2');
            $table->Integer('FC');
            $table->Integer('FR');
            $table->Integer('TA');
            $table->Integer('Dextrosis');
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
