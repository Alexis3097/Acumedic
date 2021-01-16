<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\PacienteViewModel;
use App\ViewModel\AntecedenteViewModel;

class AntecedentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Antecedentes');
    }


    public function patologico(PacienteViewModel $PacienteViewModel,AntecedenteViewModel $AntecedenteViewModel, $IdPaciente) {
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        $antePatologico = $AntecedenteViewModel->getAntPatologico($IdPaciente);
        if(is_null($antePatologico))
        {
            return view('Admin.datosDeConsulta.Antecedentes.antecedentesPatologicos',compact('paciente'));
        }
        else{
            return view('Admin.datosDeConsulta.Antecedentes.editarAntecedentesPatologicos',compact('paciente','antePatologico'));
        }
    }

    public function guardarPatologico(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $patologicos = $AntecedenteViewModel->guardarPatologico($request);
        return redirect()->route('antecedente.patologico',$request->IdPaciente);
    }

    public function actualizarPatologico(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $patologicos = $AntecedenteViewModel->actualizarPatologico($request);
        return redirect()->route('antecedente.patologico',$patologicos->IdPaciente);
    }

    public function noPatologico(PacienteViewModel $PacienteViewModel,AntecedenteViewModel $AntecedenteViewModel, $IdPaciente) {
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        $anteNoPatologico = $AntecedenteViewModel->getAntNoPatologico($IdPaciente);
        if(is_null($anteNoPatologico))
        {
            return view('Admin.datosDeConsulta.Antecedentes.antecedentesNoPatologicos',compact('paciente'));
        }
        else{
            return view('Admin.datosDeConsulta.Antecedentes.editarAntecedentesNoPatologicos',compact('paciente','anteNoPatologico'));
        }
    }
    public function guardarNoPatologico(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $noPatologico = $AntecedenteViewModel->guardarNoPatologico($request);
        return redirect()->route('antecedente.NoPatologico',$request->IdPaciente);
    }

    public function actualizarNoPatologico(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $NoPatologicos = $AntecedenteViewModel->actualizarNoPatologico($request);
        return redirect()->route('antecedente.NoPatologico',$NoPatologicos->IdPaciente);
    }

    public function ginecologico(PacienteViewModel $PacienteViewModel,AntecedenteViewModel $AntecedenteViewModel, $IdPaciente) {
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        $fecha = date_create()->format('Y-m-d');
        $anteGinecologico = $AntecedenteViewModel->getAntGinecologico($IdPaciente);
        if(is_null($anteGinecologico))
        {
            return view('Admin.datosDeConsulta.Antecedentes.antecedentesGinecologicos',compact('paciente','fecha'));
        }
        else{
            return view('Admin.datosDeConsulta.Antecedentes.editarAntecedentesGinecologicos',compact('paciente','anteGinecologico','fecha'));
        }
    }

    public function guardarGinecologico(Request $request, AntecedenteViewModel $AntecedenteViewModel){
        $ginecologico = $AntecedenteViewModel->guardarGinecologico($request);
        return redirect()->route('antecedente.ginecologico',$request->IdPaciente);
    }

    public function actualizarGinecologico(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $ginecologico = $AntecedenteViewModel->actualizarGinecologico($request);
        return redirect()->route('antecedente.ginecologico',$ginecologico->IdPaciente);
    }

    public function familiares(PacienteViewModel $PacienteViewModel,AntecedenteViewModel $AntecedenteViewModel, $IdPaciente) {
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        $anteHFamiliarez = $AntecedenteViewModel->getAntHFamiliarez($IdPaciente);
        if(is_null($anteHFamiliarez))
        {
            return view('Admin.datosDeConsulta.Antecedentes.antecedentesHFamiliares',compact('paciente'));
        }
        else{
            return view('Admin.datosDeConsulta.Antecedentes.editarAntecedentesHFamiliares',compact('paciente','anteHFamiliarez'));
        }
    }

    public function guardarFamiliares(Request $request, AntecedenteViewModel $AntecedenteViewModel){
        $familiares = $AntecedenteViewModel->guardarFamiliares($request);
        return redirect()->route('antecedente.familiares',$request->IdPaciente);
    }

    
    public function actualizarHFamiliares(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $familiares = $AntecedenteViewModel->actualizarFamiliares($request);
        return redirect()->route('antecedente.familiares',$familiares->IdPaciente);
    }
    
}
