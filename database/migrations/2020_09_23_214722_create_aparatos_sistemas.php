<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAparatosSistemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AparatosSistemas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdConsulta');
            $table->text('Cabeza')->nullable();
            $table->text('Cuello')->nullable();
            $table->text('Tronco')->nullable();
            $table->text('Pelvis')->nullable();
            $table->text('MiembroInferior')->nullable();
            $table->text('MiembroSuperior')->nullable();
            $table->text('Cabello')->nullable();
            $table->text('Dientes')->nullable();
            $table->text('Lengua')->nullable();
            $table->text('Pulso')->nullable();
            $table->timestamps();

            $table->foreign('IdConsulta')->references('id')->on('Consulta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AparatosSistemas');
    }
}
