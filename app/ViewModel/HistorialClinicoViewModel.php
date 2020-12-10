<?php

namespace App\ViewModel;
use App\Models\Consulta;

class HistorialClinicoViewModel
{
    public function getConsultas($IdPaciente)
    {
        $consultas =  Consulta::where('IdPaciente',$IdPaciente)->orderBy('id','desc')->paginate(15);
        return $consultas;
    }

    public function deleteConsulta($IdConsulta)
    {
        $consulta = Consulta::find($IdConsulta);
        $IdPaciente = $consulta->IdPaciente;
        $consulta->delete();
        return $IdPaciente;
    }

    
}