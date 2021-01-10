<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsulta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Consulta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->unsignedBigInteger('IdCita');
            $table->text('Motivo');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('IdPaciente')->references('id')->on('Paciente');
            $table->foreign('IdCita')->references('id')->on('Cita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Consulta');
    }
}
