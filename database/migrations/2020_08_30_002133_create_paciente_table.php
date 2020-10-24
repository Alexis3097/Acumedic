<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paciente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdSexo')->nullable();
            $table->string("Nombre");
            $table->string("ApellidoPaterno");
            $table->string("ApellidoMaterno");
            $table->date("FechaNacimiento")->nullable();
            $table->string("Telefono");
            $table->string("Foto")->nullable();
            $table->string("LugarOrigen")->nullable();
            $table->string("Correo")->nullable();
            $table->string('TipoSangre')->nullable();
            $table->softDeletes();
            $table->timestamps();

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
        Schema::dropIfExists('Paciente');
    }
}
