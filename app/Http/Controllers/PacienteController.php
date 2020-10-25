<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\PacienteViewModel;
use App\Http\Requests\StorePaciente;
class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PacienteViewModel $PacienteViewModel)
    {
        $pacientes = $PacienteViewModel->getPacientes();
        return view('Admin.Pacientes.pacientes', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PacienteViewModel $PacienteViewModel)
    {
        $fecha = $PacienteViewModel->getFecha();
        $Sexos = $PacienteViewModel->getSexos();
        return view('Admin.Pacientes.crearPaciente', compact('fecha', 'Sexos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaciente $request, PacienteViewModel $PacienteViewModel)
    {
        $paciente = $PacienteViewModel->create($request);
        return redirect()->route('paciente.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PacienteViewModel $PacienteViewModel, $id)
    {
        $paciente = $PacienteViewModel->getPaciente($id);
        $fecha = $PacienteViewModel->getFecha();
        $Sexos = $PacienteViewModel->getSexos();
        return view('Admin.Pacientes.editarPaciente', compact('paciente','fecha', 'Sexos'));
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
    public function update(StorePaciente $request, $id, PacienteViewModel $PacienteViewModel)
    {
        $paciente = $PacienteViewModel->update($request, $id);
        return redirect()->route('paciente.list');
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
