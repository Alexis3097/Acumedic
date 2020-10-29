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
        $horariosXCita = CitaHorario::where('IdCita', '=' , $id)->get();
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

      foreach ($citaData->Horario as $IdHorario){
        $citaHorario = new CitaHorario();
        $citaHorario->IdCita = $cita->id;
        $citaHorario->IdHorario = $IdHorario;
        $citaHorario->save();
      }

      return $cita;
    }

    public function update($citaData, $id){
      //buscar los registro a modificar
      $citaHorarios = CitaHorario::where('IdCita', '=', $id)->get();
      foreach($citaHorarios as $citaHorario){
        $citahorario1 = CitaHorario::find($citaHorario->id);
        $citahorario1->delete();
      }
      //creamos la relacion para la tabla CitaHorario
      foreach ($citaData->Horario as $IdHorario){
        $citaHorario = new CitaHorario();
        $citaHorario->IdCita = $id;
        $citaHorario->IdHorario = $IdHorario;
        $citaHorario->save();
      }

      //buscamos la cita
      $cita = Cita::find($id);
      $cita->IdTipoConsulta = $citaData->TipoConsulta;
      $cita->IdEstatusConsulta = 1;
      $cita->Descripcion = 'Guardado';
      $cita->Fecha = $citaData->Fecha;
      $cita->save();
      return $cita;
    }

}