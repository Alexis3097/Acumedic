<?php

namespace App\ViewModel;
use App\Models\Paciente;
//use Carbon\Carbon;
class PacienteViewModel
{
    public function create($pacienteData): Paciente
    {
        
        $paciente = new Paciente;
        $paciente->Nombre = $pacienteData->Nombre;
        $paciente->ApellidoPaterno = $pacienteData->ApellidoPaterno;
        $paciente->ApellidoMaterno = $pacienteData->ApellidoMaterno;
        $paciente->Telefono = $pacienteData->Telefono;
        $paciente->FechaNacimiento = $pacienteData->FechaNacimiento;
        $paciente->save();
        return $paciente;
    }
}