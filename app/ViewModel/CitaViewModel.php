<?php

namespace App\ViewModel;
use DB;
use Carbon\Carbon;
use App\Models\Cita;
use App\Models\Sexo;
use App\Models\Horario;
use App\Models\Paciente;
use App\Models\CitaHorario;
use App\Models\TipoConsulta;
use App\Models\SolicitudCitas;
use App\Models\EstatusConsulta;

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
      $cita = Cita::where('Fecha','=', date_create()->format('Y-m-d'))->get();
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
    /**
     * crea cita y paciente
     */
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
  /**
   * crea cita con paciente relacionado
   */
    public function createPaciente($citaData){
      $cita = new Cita();
      $cita->IdPaciente = $citaData->IdPaciente;
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
      $citasOcupadas = Cita::where('Fecha', '=',$fecha)->where('id','<>',$IdCita)->where('IdEstatusConsulta','<>',5)->get();//5 es el estatus cancelada, el horario queda libre
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
      //buscamos pacientes que coincidan con ese nombre dato
      $pacientes = Paciente::where('Nombre', 'like','%' . $nombrePaciente. '%')
                ->orWhere('ApellidoPaterno', 'like','%' . $nombrePaciente. '%')
                ->orWhere('ApellidoMaterno', 'like','%' . $nombrePaciente. '%')
                ->get();
      //si no se encuentra nada o sea el arreglo es 0 entonces retornamos un arreglos vacio
      if(count($pacientes)==0)
      {
        return $citasTotales =[];
      }
      //si hay pacientes existenetes, busco esos pacientes en la tabla de citas y creo un arreglo apartir de los arreglos que obtengo para asi
      //tener solo un arreglo bidimensional
      else{
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

    public function getCitasInicio()
    {
      $cita = Cita::where('Fecha','=', date_create()->format('Y-m-d'))->where('IdEstatusConsulta',1)->orWhere('IdEstatusConsulta',2)->get();
      return $cita;
    }

    public function numeroCitasDelDia(){
      $cita = Cita::where('Fecha','=', date_create()->format('Y-m-d'))->get();
      return count($cita);
    }

    /**
     * crea una solicitud de cita
     */
    public function solicitarCita($solicitudData){
      // dd($solicitudData->toArray());
      $_ESTATUS_SOLICITUD = 1;//EL ESTATUS ES PENDIENTE
      $solicitudCita = new SolicitudCitas();
      $solicitudCita->IdEstatusSolicitud = $_ESTATUS_SOLICITUD;
      $solicitudCita->NombreCompleto = $solicitudData->NombreCompleto;
      $solicitudCita->Correo = $solicitudData->Correo;
      $solicitudCita->Ciudad = $solicitudData->Ciudad;
      $solicitudCita->Telefono = $solicitudData->Telefono;
      $solicitudCita->save();
      return $solicitudCita;
    }

    /**
     * mostrar todas las solicitudes
     */
    public function getAllSolicitudCitas(){
      return SolicitudCitas::paginate(15);
    }


    /**
     * Devuelve idcita del paciente si su cita esta "en espera" o "Presente" si no lo es, devuelve un 0
     */

     public function getCitaXEstatus($IdPaciente){
       $cita = Cita::where('IdPaciente',$IdPaciente)->get();
       $ultimaCita = $cita->last();
       if($ultimaCita->IdEstatusConsulta == 1 || $ultimaCita->IdEstatusConsulta == 2){
          return $ultimaCita->id;
       }
       return 0;
     }

     /**
      * Cambia el estatus de la solicitud del la cita con el id correspondiente
      */
     public function changeEstatusSolicitudCita($IdSolicitudCita, $IdEstus){
      $solicitud = SolicitudCitas::find($IdSolicitudCita);
      $solicitud->IdEstatusSolicitud = $IdEstus;
      $solicitud->save();
      return;
     }
}