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
    
    
    public function index($IdPaciente,$IdCita,PacienteViewModel $PacienteViewModel, CitaViewModel $CitaViewModel)
    {   
        $IdCita = $CitaViewModel->estatusCita($IdCita);
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.datosPaciente', compact('paciente','IdCita'));
    }
    /**
     *
     * En esta parte al igual que index lleva al perfil de consula pero desde el listado de paciente 
     */
    public function perfilUsuario($IdPaciente,PacienteViewModel $PacienteViewModel, CitaViewModel $CitaViewModel)
    {
        $IdCita = $CitaViewModel->getCitaXEstatus($IdPaciente);
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.datosPaciente', compact('paciente','IdCita'));
    }
}
