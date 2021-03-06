<?php

namespace App\Http\Controllers;
use App\ViewModel\PacienteViewModel;
use App\Http\Requests\StorePaciente;
use App\Http\Requests\BuscarPacienteXCita;
use Illuminate\Http\Request;
class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:ListadoPacientes|CrearPaciente|EditarPaciente|EliminarPaciente']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = PacienteViewModel::getPacientes();
        return view('Admin.Pacientes.pacientes', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = PacienteViewModel::getFecha();
        $Sexos = PacienteViewModel::getSexos();
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
    public function edit(PacienteViewModel $PacienteViewModel, $id)
    {
        $paciente = $PacienteViewModel->getPaciente($id);
        $fecha = PacienteViewModel::getFecha();
        $Sexos = PacienteViewModel::getSexos();
        return view('Admin.Pacientes.editarPaciente', compact('paciente','fecha', 'Sexos'));
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
    public function destroy(Request $request)
    {
        $paciente = PacienteViewModel::delete($request->IdModal);
        return redirect()->route('paciente.list');
    }

    public function buscarPaciente(Request $request)
    {
        $varibles = $request->all();
        $pacientes = PacienteViewModel::buscarPaciente($request->Nombre, $varibles);
        return view('Admin.Pacientes.busquedaPacientes', compact('pacientes'));
    }

}
