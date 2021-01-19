<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\ConsultaViewModel;
use App\Http\Requests\StoreMotivoCita;
class ConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:InicarConsulta');
    }

    //iniciar la consultaa, crea el registro de la consulta
    public function iniciarConsulta(StoreMotivoCita $request, ConsultaViewModel $ConsultaViewModel)
    {
        $consulta = $ConsultaViewModel->crearConsulta($request);
        $ConsultaViewModel->cambiarEstatusCita($request->IdCita,3);//3 es el estatus "En Cita"
        $IdConsulta = $consulta->id;
        $IdPaciente = $consulta->IdPaciente;
        return redirect()->route('consulta.iniciada',compact('IdPaciente','IdConsulta'));
    }

    public function consultaIniciada($IdPaciente,$IdConsulta, ConsultaViewModel $ConsultaViewModel){
        $paciente = $ConsultaViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.Consulta.consultaMedicaAparatosSistemas', compact('IdConsulta','paciente'));
    }

    public function guardarConsultaAparatosSistemas(Request $request, ConsultaViewModel $ConsultaViewModel)
    {
        $aparatosSistemas = $ConsultaViewModel->guardarConsultaAparatosSistemas($request);
        $IdConsulta = $request->IdConsulta;
        $sintomasSubjetivos = $ConsultaViewModel->getSintomasSubjetivosXId($IdConsulta);
        $paciente = $ConsultaViewModel->getPacienteXConsulta($IdConsulta);
        return view('Admin.datosDeConsulta.Consulta.consultaMedicaSintomasSubjetivos',compact('IdConsulta','sintomasSubjetivos','paciente'));
    }

    public function updateConsultaAparatosSistemas(Request $request, ConsultaViewModel $ConsultaViewModel)
    {
        $aparatosSistemas = $ConsultaViewModel->updateAparatosSistemas($request);
        $IdConsulta = $aparatosSistemas->IdConsulta;
        $sintomasSubjetivos = $ConsultaViewModel->getSintomasSubjetivosXId($IdConsulta);
        $paciente = $ConsultaViewModel->getPacienteXConsulta($IdConsulta);
        return view('Admin.datosDeConsulta.Consulta.consultaMedicaSintomasSubjetivos',compact('IdConsulta','sintomasSubjetivos','paciente'));

    }

    public function verAparatosSistemas(ConsultaViewModel $ConsultaViewModel, $IdConsulta)
    {
        $aparatosSistemas = $ConsultaViewModel->getAparatosSistemasXId($IdConsulta);
        $paciente = $ConsultaViewModel->getPacienteXConsulta($IdConsulta);
        if(is_null($aparatosSistemas))
        {
            return view('Admin.datosDeConsulta.Consulta.consultaMedicaAparatosSistemas', compact('IdConsulta','paciente'));
            
        }else{
            return view('Admin.datosDeConsulta.Consulta.verAparatosSistemas', compact('IdConsulta','aparatosSistemas','paciente'));
        }
        
    }

    public function consultaSintomasSubjetivos($IdConsulta,ConsultaViewModel $ConsultaViewModel)
    {
        $sintomasSubjetivos = $ConsultaViewModel->getSintomasSubjetivosXId($IdConsulta);
        $paciente = $ConsultaViewModel->getPacienteXConsulta($IdConsulta);
        return view('Admin.datosDeConsulta.Consulta.consultaMedicaSintomasSubjetivos', compact('IdConsulta','sintomasSubjetivos','paciente'));
    }

    public function guardarConsultaSintomasSubjetivos(Request $request, ConsultaViewModel $ConsultaViewModel)
    {
        $sintomaSubjetivo = $ConsultaViewModel->guardarSintomasSubjetivos($request);
        return redirect()->route('consulta.SintomasSubjetivos',$request->IdConsulta);
    }

    public function updateConsultaSintomasSubjetivos(Request $request, ConsultaViewModel $ConsultaViewModel)
    {
        $sintomaSubjetivo = $ConsultaViewModel->updateSintomasSubjetivos($request);
        return redirect()->route('consulta.SintomasSubjetivos',$request->IdConsulta);
    }

    public function deleteConsultaSintomasSubjetivos(Request $request, ConsultaViewModel $ConsultaViewModel)
    {
        $sintomaSubjetivo = $ConsultaViewModel->deleteSintomasSubjetivos($request->IdModal);
        return redirect()->route('consulta.SintomasSubjetivos',$request->IdConsulta);
    }
    
    public function finalizarConsulta(Request $request, ConsultaViewModel $ConsultaViewModel)
    {
        $ConsultaViewModel->finalzarCita($request->IdConsulta);
        $IdPaciente = $ConsultaViewModel->getIdpaciente($request->IdConsulta);
        return redirect()->route('consulta.pacientePerfil', $IdPaciente);
    }
    
}
