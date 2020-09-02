<?php

use Illuminate\Database\Seeder;

class TipoAntecedenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoAntecedente')->insert([
            'Nombre' => 'Patologicos',
            'Descripcion' => 'Enfermedades padecidas desde la infancia',
        ]);

        DB::table('TipoAntecedente')->insert([
            'Nombre' => 'No Patologicos',
            'Descripcion' => 'Enfermedades no paecidas desde la infancia',
        ]);

        DB::table('TipoAntecedente')->insert([
            'Nombre' => 'Ginecologicos',
            'Descripcion' => 'Salud femenina',
        ]);

        DB::table('TipoAntecedente')->insert([
            'Nombre' => 'H. Familiares',
            'Descripcion' => 'De familia',
        ]);

        DB::table('TipoAntecedente')->insert([
            'Nombre' => 'Otros antecedentes',
            'Descripcion' => 'Otros tipos de antecedentes',
        ]);
    }
}
