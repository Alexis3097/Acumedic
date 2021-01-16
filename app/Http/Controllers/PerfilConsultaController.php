<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\CitaViewModel;
use App\ViewModel\PacienteViewModel;

class PerfilConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Consulta');
    }
    
    
    public function index(PacienteViewModel $PacienteViewModel,$IdPaciente, CitaViewModel $CitaViewModel)
    {
        $IdCita = $CitaViewModel->getCitaXEstatus($IdPaciente);
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.datosPaciente', compact('paciente','IdCita'));
    }
}
