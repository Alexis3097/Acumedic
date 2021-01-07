<?php

namespace App\ViewModel;
use App\Models\Paciente;
use App\Models\Sexo;
use App\Models\Cita;
use App\Models\CitaHorario;
use Carbon\Carbon;
class PacienteViewModel
{
    public static function getPacientes()
    {
        return Paciente::paginate(15);
    }

    public function getPaciente($id)
    {
        return Paciente::find($id);
    }

    public static function getFecha()
    {
      return Carbon::now();
    }

    public static function getSexos()
    {
      return Sexo::All();
    }

    public static function delete($id)
    {
      $citas = Cita::where('IdPaciente', $id)->get();
      
      if(count($citas)>0){
        foreach($citas as $cita)
        {
          $citasHorarios = CitaHorario::where('IdCita',$cita->id)->delete();
          $cita->delete();
        }
       
      }
      $paciente = Paciente::find($id);
      $paciente->delete();
      return $paciente;
    }

    public function create($pacienteData): Paciente
    {
        $modelPaciente = $pacienteData->except('_token');
        if($archivo = $pacienteData->file('Foto'))
        {
          $nombre = time().'.'.$archivo->getClientOriginalExtension();
          $archivo->move('uploads', $nombre);
          $modelPaciente['Foto']  = $nombre;
        }
        return Paciente::create($modelPaciente);
    }

    public function update($pacienteData, $id)
    {
        $paciente = Paciente::find($id);
        if($archivo = $pacienteData->file('Foto'))
        {
          if(!is_null($paciente->Foto)){
             $rutaImagen = public_path().'/uploads/'.$paciente->Foto;
            if (@getimagesize($rutaImagen)){
              unlink($rutaImagen);
            }
          }
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

    public static function buscarPaciente($Nombre) 
    {
      $pacientes = Paciente::where('Nombre', 'like','%' . $Nombre. '%')
                  ->orWhere('ApellidoPaterno', 'like','%' . $Nombre. '%')
                  ->orWhere('ApellidoMaterno', 'like','%' . $Nombre. '%')
                  ->get();
      return $pacientes;
    }

    public function totalPacientes(){
      $Pacientes = Paciente::all();
      return count($Pacientes);
    }
}