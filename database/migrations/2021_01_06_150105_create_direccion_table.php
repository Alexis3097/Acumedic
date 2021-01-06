<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Direccion', function (Blueprint $table) {
            $table->id();
            $table->string('Estado');
            $table->string('Municipio');
            $table->string('Colonia');
            $table->string('Calle');
            $table->string('NoExterior')->nullable();
            $table->string('NoInterior')->nullable();
            $table->string('Calle1')->nullable();
            $table->string('Calle2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Direccion');
    }
}
