<?php

namespace App\ViewModel;
use App\Models\Consulta;

class HistorialClinicoViewModel
{
    public function getConsultas($IdPaciente)
    {
        $consultas =  Consulta::where('IdPaciente',$IdPaciente)->get();
        return $consultas;
    }

    
}