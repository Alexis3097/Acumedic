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
            $table->string('Direccion');
            $table->string('Correo');
            $table->decimal('Peso');
            $table->decimal('Talla');
            $table->string('TipoSangre');
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
