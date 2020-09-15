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
            $table->unsignedBigInteger('IdSexo');
            $table->string('LugarOrigen');
            $table->string('LugarResidencia');
            $table->string('Direccion');
            $table->string('Correo')->nullable();
            $table->decimal('Peso');
            $table->decimal('Talla');
            $table->string('TipoSangre')->nullable();
            $table->Integer('SPO2');
            $table->Integer('FC');
            $table->Integer('FR');
            $table->Integer('TA');
            $table->Integer('Dextrosis');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('IdPaciente')->references('id')->on('Pacientes');
            $table->foreign('IdSexo')->references('id')->on('Sexo');
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
