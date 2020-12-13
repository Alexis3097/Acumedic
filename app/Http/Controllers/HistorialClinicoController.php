<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\HistorialClinicoViewModel;
use App\ViewModel\ConsultaViewModel;

class HistorialClinicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Historial');
    }
    
    public function index(HistorialClinicoViewModel $HistorialClinicoViewModel,ConsultaViewModel $ConsultaViewModel,$IdPaciente)
    {
        $consultas = $HistorialClinicoViewModel->getConsultas($IdPaciente);
        $paciente = $ConsultaViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.historialClinico', compact('consultas','paciente'));
    }

    
    public function verAparatosSintomas(ConsultaViewModel $ConsultaViewModel,$IdConsulta)
    {
        $aparatosSistemas = $ConsultaViewModel->getAparatosSistemasXId($IdConsulta);
        $paciente = $ConsultaViewModel->getPacienteXConsulta($IdConsulta);
        if(is_null($aparatosSistemas)){
            return view('Admin.datosDeConsulta.verConsulta.historialVacioAparatosSistemas', compact('paciente','IdConsulta'));
        }else
            return view('Admin.datosDeConsulta.verConsulta.historialAparatosSistemas', compact('aparatosSistemas','paciente'));
    }

    public function verSintomasSubjetivos(ConsultaViewModel $ConsultaViewModel,$IdConsulta)
    {
        $sintomasSubjetivos = $ConsultaViewModel->getSintomasSubjetivosXId($IdConsulta);
        $paciente = $ConsultaViewModel->getPacienteXConsulta($IdConsulta);
        return view('Admin.datosDeConsulta.verConsulta.verSintomasSubjetivos', compact('sintomasSubjetivos','paciente','IdConsulta'));
    }

    public function deleteConsulta(HistorialClinicoViewModel $HistorialClinicoViewModel,Request $request)
    {
        $IdPaciente = $HistorialClinicoViewModel->deleteConsulta($request->IdModal);
        return redirect()->route('consulta.historial',$IdPaciente);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
