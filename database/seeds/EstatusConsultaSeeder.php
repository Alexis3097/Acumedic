<?php

use Illuminate\Database\Seeder;

class EstatusConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('EstatusConsulta')->insert([
            'Nombre' => 'En espera',
            'Descripcion' => 'Cuando se ha hecho la cita',
        ]);

        DB::table('EstatusConsulta')->insert([
            'Nombre' => 'Presente',
            'Descripcion' => 'Cuando el paciente esta esperando',
        ]);

        DB::table('EstatusConsulta')->insert([
            'Nombre' => 'En cita',
            'Descripcion' => 'Cuando se inica la cita',
        ]);

        DB::table('EstatusConsulta')->insert([
            'Nombre' => 'Finalizada',
            'Descripcion' => 'Cuando se inica la cita',
        ]);

        DB::table('EstatusConsulta')->insert([
            'Nombre' => 'Cancelada',
            'Descripcion' => 'Cuando cancela la cita',
        ]);

        DB::table('EstatusConsulta')->insert([
            'Nombre' => 'Sin asistir',
            'Descripcion' => 'Cuando el paciente no asiste',
        ]);
    }
}
