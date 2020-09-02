<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cita', function (Blueprint $table) {
            $table->id();
            $table->string("Descripcion");
            $table->unsignedBigInteger('IdPaciente');
            $table->unsignedBigInteger('IdTipoConsulta');
            $table->unsignedBigInteger('IdEstatusConsulta');
            $table->date('Fecha');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('IdPaciente')->references('id')->on('Pacientes');
            $table->foreign('IdTipoConsulta')->references('id')->on('TipoConsulta');
            $table->foreign('IdEstatusConsulta')->references('id')->on('EstatusConsulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Cita');
    }
}
