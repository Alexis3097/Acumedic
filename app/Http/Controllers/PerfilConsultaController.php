<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\PacienteViewModel;
class PerfilConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Consulta');
    }
    
    
    public function index(PacienteViewModel $PacienteViewModel,$IdPaciente)
    {
        if(session()->has('IdConsulta'))
        {
            session()->forget('IdConsulta');
        }
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.datosPaciente', compact('paciente'));
    }
}
