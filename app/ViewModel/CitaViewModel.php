<?php

namespace App\ViewModel;
use App\Models\Paciente;
use App\Models\TipoConsulta;
use App\Models\Cita;
use App\Models\Horario;
use Carbon\Carbon;
class CitaViewModel
{
    public function fecha()
    {
        return Carbon::now();
    }

    public function tipoConsulta()
    {
       return TipoConsulta::All();
    }

    public function Citas()
    {
       return Cita::All();
    }

    public function horarios()
    {
       return Horario::All();
    }
}