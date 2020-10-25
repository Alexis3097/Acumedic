<?php

namespace App\ViewModel;
use App\Models\Paciente;
use App\Models\Sexo;
use Carbon\Carbon;
class PacienteViewModel
{
    public function getPacientes()
    {
        return Paciente::All();
    }

    public function getPaciente($id)
    {
        return Paciente::find($id);
    }

    public function getFecha()
    {
      return Carbon::now();
    }

    public function getSexos()
    {
      return Sexo::All();
    }


    public function create($pacienteData): Paciente
    {
        
        $paciente = new Paciente();
        if($archivo = $pacienteData->file('Foto'))
        {
          $nombre = time().'.'.$archivo->getClientOriginalExtension();
          $archivo->move('uploads', $nombre);
          $paciente->Foto = $nombre;
        }
        $paciente->IdSexo = $pacienteData->IdSexo;
        $paciente->Nombre = $pacienteData->Nombre;
        $paciente->ApellidoPaterno = $pacienteData->ApellidoPaterno;
        $paciente->ApellidoMaterno = $pacienteData->ApellidoMaterno;
        $paciente->FechaNacimiento = $pacienteData->FechaNacimiento;
        $paciente->Telefono = $pacienteData->Telefono;
        $paciente->LugarOrigen = $pacienteData->LugarOrigen;
        $paciente->Correo = $pacienteData->Correo;
        $paciente->TipoSangre = $pacienteData->TipoSangre;
        $paciente->save();
        return  $paciente;
    }

    public function update($pacienteData, $id)
    {
        
        $paciente = Paciente::find($id);
        if($archivo = $pacienteData->file('Foto'))
        {
          $nombre = time().'.'.$archivo->getClientOriginalExtension();
          $archivo->move('uploads', $nombre);
          $paciente->Foto = $nombre;
        }
        $paciente->IdSexo = $pacienteData->IdSexo;
        $paciente->Nombre = $pacienteData->Nombre;
        $paciente->ApellidoPaterno = $pacienteData->ApellidoPaterno;
        $paciente->ApellidoMaterno = $pacienteData->ApellidoMaterno;
        $paciente->FechaNacimiento = $pacienteData->FechaNacimiento;
        $paciente->Telefono = $pacienteData->Telefono;
        $paciente->LugarOrigen = $pacienteData->LugarOrigen;
        $paciente->Correo = $pacienteData->Correo;
        $paciente->TipoSangre = $pacienteData->TipoSangre;
        $paciente->save();
        return  $paciente;
    }
}