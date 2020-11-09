<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\PacienteViewModel;
class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PacienteViewModel $PacienteViewModel,$IdPaciente)
    {
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        return view('Admin.datosDeConsulta.datospaciente', compact('paciente'));
    }
    public function historial($IdPaciente)
    {
        return view('Admin.datosDeConsulta.historialClinico');
    }

    public function consultaAparatosSistemas()
    {
        return view('Admin.datosDeConsulta.Consulta.consultaMedicaAparatosSistemas');
    }

    public function consultaSintomasSubjetivos()
    {
        return view('Admin.datosDeConsulta.Consulta.consultaMedicaSintomasSubjetivos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
