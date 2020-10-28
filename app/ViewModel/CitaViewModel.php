<?php

namespace App\ViewModel;
use App\Models\Paciente;
use App\Models\TipoConsulta;
use App\Models\Sexo;
use App\Models\Cita;
use App\Models\CitaHorario;
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
      return Cita::paginate(15);
    }
    
    public function getCita($id)
    {
      return Cita::find($id);
    }

    public function getHorarios()
    {
      return Horario::All();
    }
    

    public function getHorariosXCita($id)
    { 
        $ID = (int) $id;
        $horariosXCita = CitaHorario::where('IdCita', '=' , $ID)->get();
        return $horariosXCita;
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
      $cita->IdTipoConsulta = $citaData->TipoConsulta;
      $cita->IdEstatusConsulta = 1;
      $cita->Descripcion = 'Guardado';
      $cita->Fecha = $citaData->Fecha;
      $cita->save();

      $citaHorario = new CitaHorario();
      $citaHorario->IdCita = $cita->id;
      $citaHorario->IdHorario = $citaData->Horario;
      $citaHorario->save();

      return $cita;
    }

    public function update($citaData, $id){
      
    }

}