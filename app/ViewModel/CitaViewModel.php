<?php

namespace App\ViewModel;
use App\Models\Paciente;
use App\Models\TipoConsulta;
use App\Models\Sexo;
use App\Models\Cita;
use App\Models\EstatusConsulta;
use App\Models\CitaHorario;
use App\Models\Horario;
use Carbon\Carbon;
use DB;
class CitaViewModel
{
    public static function getFecha()
    {
      return Carbon::now();
    }

    public static function getEstatusConsulta()
    {
      return EstatusConsulta::All();
    }

    public static function getTipoConsulta()
    {
      return TipoConsulta::All();
    }

    public static function getCitas()
    {
      $cita = Cita::where('Fecha','=', date_create()->format('Y-m-d'))->paginate(15);
      return $cita;
    }
    
    public function getCita($id)
    {
      return Cita::find($id);
    }

    public static function getHorarios()
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
      if($citaData->input('id') == 0){
        $paciente = new Paciente();
        $paciente->Nombre = $citaData->Nombre;
        $paciente->ApellidoPaterno = $citaData->ApellidoPaterno;
        $paciente->ApellidoMaterno = $citaData->ApellidoMaterno;
        $paciente->Telefono = $citaData->Telefono;
        $paciente->save();
      }

      $cita = new Cita();
      if($citaData->id == 0){
        $cita->IdPaciente = $paciente->id;
      }else{
        $cita->IdPaciente = $citaData->input('id');
      }
      $cita->IdTipoConsulta = $citaData->TipoConsulta;
      $cita->IdEstatusConsulta = $citaData->IdEstatusConsulta;
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
      $cita->IdEstatusConsulta = $citaData->IdEstatusConsulta;
      $cita->Descripcion = 'Guardado';
      $cita->Fecha = $citaData->Fecha;
      $cita->save();
      return $cita;
    }

    public static function delete($id){
      $citasHorarios = CitaHorario::where('IdCita',$id)->get();
      foreach ($citasHorarios as $citaHorario){
        $citaHorario->delete();
      }
      $cita = Cita::find($id);
      $cita->delete();
      return $cita;
    }

    public static function getHorariosDisponibles($fecha, $IdCita = 0){
      $citasOcupadas = Cita::where('Fecha', '=',$fecha)->where('id','<>',$IdCita)->get();
      if(count($citasOcupadas)==0)
      {
        $horariosAll = Horario::All();
        foreach($horariosAll as $horario){
            $horariosArray[$horario->id] = $horario->Horario;
        }
        return $horariosArray;
      }else{
        foreach($citasOcupadas as $citasOcupada){
        
          $citasOCupadasArray0[] = CitaHorario::where('IdCita','=',$citasOcupada->id)->select("IdHorario")->get()->toArray();
        }
        foreach($citasOCupadasArray0 as $x){
          foreach($x as $clave=>$value){
            $citasOCupadasArray[]=$value;
          }
        }
        //---------
        foreach ($citasOCupadasArray as $IdHorario){
         $idHorariosOcupados[$IdHorario['IdHorario']] = $IdHorario['IdHorario'];
        }
        $horarios = Horario::all()->toArray();
        foreach ($horarios as $horario){
          $todosLosHorarios[$horario['id']] = $horario['Horario'];
         }
        
         foreach ($idHorariosOcupados as $clave0 =>$valor0){
           foreach ($todosLosHorarios as $clave1 =>$valor1){
             if($clave1 == $clave0)
             {
                unset($todosLosHorarios[$clave0]);
             }
          }
         }
         return $todosLosHorarios;
      }
      
    }

    public function BuscarCitaXRangoFecha($FechaData)
    {
      if(strlen($FechaData->Fechas) > 10)
      {
        $fecha= str_replace('to','-',$FechaData->Fechas);
        $solofecha= str_replace(' ','',$fecha);
        $Fechas = explode("-", $solofecha);
        $fechaInicial = $Fechas[0].'-'.$Fechas[1].'-'.$Fechas[2];
        $fechaFinal = $Fechas[3].'-'.$Fechas[4].'-'.$Fechas[5];
        $citas = Cita::whereBetween('Fecha', [$fechaInicial, $fechaFinal])->get();
        return $citas;
      }
      else{
        $citas = Cita::where('Fecha', $FechaData->Fechas)->get();
        return $citas;
      }
     
    }

    public function buscarCitaXPaciente($nombrePaciente)
    {
      $pacientes = Paciente::where('Nombre', 'like','%' . $nombrePaciente. '%')
                ->orWhere('ApellidoPaterno', 'like','%' . $nombrePaciente. '%')
                ->orWhere('ApellidoMaterno', 'like','%' . $nombrePaciente. '%')
                ->get();
        foreach ($pacientes as $paciente){
          $citasXPaciente[] = Cita::where('IdPaciente',$paciente->id)->get();
        }
        foreach ($citasXPaciente as $citaXPaciente)
        {
          foreach ($citaXPaciente as $cita)
          {
            $citasTotales[] = $cita; 
          }
        }
        return $citasTotales;
    }

    public static function tipoDeConsultaxPaciente($IdPaciente){
      $conuslta = Cita::where('IdPaciente',$IdPaciente)->get();
      if($conuslta->count()>0)
      {
        return $primeraCita = false;
      }
      else{
        return $primeraCita = true;
      }
    }

}