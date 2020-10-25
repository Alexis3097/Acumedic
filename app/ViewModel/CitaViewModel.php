<?php

namespace App\ViewModel;
use App\Models\Paciente;
use App\Models\TipoConsulta;
use App\Models\Sexo;
use App\Models\Cita;
use App\Models\Horario;
use Carbon\Carbon;
class CitaViewModel
{
    public function getFecha()
    {
      return Carbon::now();
    }

    public function getTipoConsulta()
    {
      return TipoConsulta::All();
    }

    public function getCitas()
    {
      return Cita::All();
    }

    public function getHorarios()
    {
      return Horario::All();
    }

    public function getSexos()
    {
      return Sexo::All();
    }

    public function create($citaData)
    {
      $paciente = new Paciente();
      $paciente->Nombre = $citaData->Nombre;
      $paciente->ApellidoPaterno = $citaData->ApellidoPaterno;
      $paciente->ApellidoMaterno = $citaData->ApellidoMaterno;
      $paciente->Telefono = $citaData->Telefono;
      $paciente->save();

      $cita = new Cita();
      $cita->IdPaciente = $paciente->id;
      $cita->IdTipoConsulta = $citaData->IdTipoConsulta;
      $cita->IdEstatusConsulta = $citaData->IdEstatusConsulta;
      $cita->Descripcion = 'Guardado';
      $cita->Fecha = $citaData->Fecha;
    }

}