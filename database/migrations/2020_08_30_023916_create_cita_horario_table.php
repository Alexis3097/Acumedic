<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitaHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CitaHorario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdCita');
            $table->unsignedBigInteger('IdHorario');
            $table->timestamps();

            $table->foreign('IdCita')->references('id')->on('Cita');
            $table->foreign('IdHorario')->references('id')->on('Horario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CitaHorario');
    }
}
