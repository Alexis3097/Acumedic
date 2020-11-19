<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntHFamiliarezTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AntHFamiliarez', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdPaciente');
            $table->mediumText('Diabetes')->nullable();
            $table->mediumText('Hipertension')->nullable();
            $table->mediumText('EnfToriodeas')->nullable();
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
        Schema::dropIfExists('AntHFamiliarez');
    }
}
