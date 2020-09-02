<?php

use Illuminate\Database\Seeder;

class TipoConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TipoConsulta')->insert([
            'Nombre' => 'Primera vez',
            'Descripcion' => 'Regularmente son de una hora',
        ]);

        DB::table('TipoConsulta')->insert([
            'Nombre' => 'Subsecuente',
            'Descripcion' => 'Regularmente son de dos hora',
        ]);
    }
}
