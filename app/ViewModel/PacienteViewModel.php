<?php

namespace App\ViewModel;
use App\Models\Paciente;
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
        if(!$pacienteData->Foto == '' || $pacienteData->Foto == NULL){
            $paciente->Foto = $pacienteData->FechaNacimiento;
        }
        $paciente->save();
        return $paciente;
    }
}