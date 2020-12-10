<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntPatologicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AntPatologico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->mediumText('Hospitalarios')->nullable();
            $table->mediumText('Cirugias')->nullable();
            $table->mediumText('EnfermedadesCardiacas')->nullable();
            $table->mediumText('Transfusiones')->nullable();
            $table->mediumText('Cancer')->nullable();
            $table->mediumText('Traumatismo')->nullable();
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
        Schema::dropIfExists('AntPatologico');
    }
}
