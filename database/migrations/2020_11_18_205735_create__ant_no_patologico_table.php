<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntNoPatologicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AntNoPatologico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->mediumText('ActividadFisica')->nullable();
            $table->mediumText('Tabaquismo')->nullable();
            $table->mediumText('Alcoholismo')->nullable();
            $table->mediumText('SustanciasODrogas')->nullable();
            $table->mediumText('VacunasRecientes')->nullable();
            $table->mediumText('Otros')->nullable();
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
        Schema::dropIfExists('AntNoPatologico');
    }
}
