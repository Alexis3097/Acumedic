<?php

use App\Models\Cita;
use App\Models\CitaHorario;
use Illuminate\Database\Seeder;

class CitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cita1
        $cita1 = Cita::create([
            'IdPaciente' => 1,
            'IdTipoConsulta' => 1,
            'IdEstatusConsulta' => 1,
            'Descripcion' => 'lorep',
            'Fecha' => date_create()->format('Y-m-d'),
        ]);
        $horario1 = CitaHorario::create([
            'IdCita' => 1,
            'IdHorario' => 1,
        ]);

        //cita2
        $cita2 = Cita::create([
            'IdPaciente' => 2,
            'IdTipoConsulta' => 1,
            'IdEstatusConsulta' => 1,
            'Descripcion' => 'lorep',
            'Fecha' => date_create()->format('Y-m-d'),
        ]);
        $horario2 = CitaHorario::create([
            'IdCita' => 2,
            'IdHorario' => 2,
        ]);

        //cita3
        $cita3 = Cita::create([
            'IdPaciente' => 3,
            'IdTipoConsulta' => 1,
            'IdEstatusConsulta' => 1,
            'Descripcion' => 'lorep',
            'Fecha' => date_create()->format('Y-m-d'),
        ]);
        $horario3 = CitaHorario::create([
            'IdCita' => 3,
            'IdHorario' => 3,
        ]);

        //cita4
        $cita4 = Cita::create([
            'IdPaciente' => 4,
            'IdTipoConsulta' => 1,
            'IdEstatusConsulta' => 1,
            'Descripcion' => 'lorep',
            'Fecha' => date_create()->format('Y-m-d'),
        ]);
        $horario4 = CitaHorario::create([
            'IdCita' => 4,
            'IdHorario' => 4,
        ]);

        //Cita5
        $cita5 = Cita::create([
            'IdPaciente' => 5,
            'IdTipoConsulta' => 1,
            'IdEstatusConsulta' => 1,
            'Descripcion' => 'lorep',
            'Fecha' => date_create()->format('Y-m-d'),
        ]);
        $horario5 = CitaHorario::create([
            'IdCita' => 5,
            'IdHorario' => 5,
        ]);

        //Cita6
        $cita6 = Cita::create([
            'IdPaciente' => 6,
            'IdTipoConsulta' => 1,
            'IdEstatusConsulta' => 1,
            'Descripcion' => 'lorep',
            'Fecha' => date_create()->format('Y-m-d'),
        ]);

        $horario6 = CitaHorario::create([
            'IdCita' => 6,
            'IdHorario' => 6,
        ]);
    }
}
