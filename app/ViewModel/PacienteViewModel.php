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
      if(!is_null($paciente->Foto)){
          cloudinary()->destroy($paciente->FotoId);
          $paciente->delete();
      }
      return $paciente;
    }

    public function create($pacienteData): Paciente
    {
        $modelPaciente = $pacienteData->except('_token');
        if(!is_null($pacienteData->file('Foto'))){

            $foto = cloudinary()->upload($pacienteData->file('Foto')->getRealPath());
            $modelPaciente['Foto']  = $foto->getSecurePath();
            $modelPaciente['FotoId']  =  $foto->getPublicId();
        }
        return Paciente::create($modelPaciente);
    }

    public function update($pacienteData, $id)
    {
        $paciente = Paciente::find($id);

        if(!is_null($pacienteData->file('Foto'))){
            $foto = cloudinary()->upload($pacienteData->file('Foto')->getRealPath());
            //elimino la foto vieja si es que tiene
            if(!is_null($paciente->Foto)){
                cloudinary()->destroy($paciente->FotoId);
            }
            //actualizo el url de la nueva fotp
            $paciente->Foto =$foto->getSecurePath();
            $paciente->FotoId =$foto->getPublicId();
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

    public static function buscarPaciente($Nombre, $varibles)
    {
      $pacientes = Paciente::where('Nombre', 'like','%' . $Nombre. '%')
                  ->orWhere('ApellidoPaterno', 'like','%' . $Nombre. '%')
                  ->orWhere('ApellidoMaterno', 'like','%' . $Nombre. '%')
                  ->paginate(15)->appends($varibles);
      return $pacientes;
    }

    public function totalPacientes(){
      $Pacientes = Paciente::all();
      return count($Pacientes);
    }
}
