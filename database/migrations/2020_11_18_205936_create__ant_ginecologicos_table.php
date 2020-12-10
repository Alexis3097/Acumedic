<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntGinecologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AntGinecologicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->mediumText('FechaPrimeraMenstruacion')->nullable();
            $table->mediumText('FechaUltimaMenstruacion')->nullable();
            $table->mediumText('CaractMenstruacion')->nullable();
            $table->mediumText('Embarazos')->nullable();
            $table->mediumText('CancerCervico')->nullable();
            $table->mediumText('CancerUterino')->nullable();
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
        Schema::dropIfExists('AntGinecologicos');
    }
}
