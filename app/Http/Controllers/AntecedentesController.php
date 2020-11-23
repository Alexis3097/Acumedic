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
    }

    public function index(PacienteViewModel $PacienteViewModel,AntecedenteViewModel $AntecedenteViewModel, $IdPaciente)
    {
        $paciente = $PacienteViewModel->getPaciente($IdPaciente);
        $fecha = date_create()->format('Y-m-d');
        $antePatologico = $AntecedenteViewModel->getAntPatologico($IdPaciente);
        if(is_null($antePatologico))
        {
            return view('Admin.datosDeConsulta.Antecedentes.antecedentes',compact('paciente','fecha'));
        }
        else{
            $anteNoPatologico = $AntecedenteViewModel->getAntNoPatologico($IdPaciente);
            $anteGinecologico = $AntecedenteViewModel->getAntGinecologico($IdPaciente);
            $anteHFamiliarez = $AntecedenteViewModel->getAntHFamiliarez($IdPaciente);
            return view('Admin.datosDeConsulta.Antecedentes.editarAntecedentes',compact('paciente','fecha','antePatologico','anteNoPatologico','anteGinecologico','anteHFamiliarez'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, AntecedenteViewModel $AntecedenteViewModel)
    {
        $antecedente = $AntecedenteViewModel->create($request);
        return redirect()->route('consulta.paciente',$request->IdPaciente);
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
