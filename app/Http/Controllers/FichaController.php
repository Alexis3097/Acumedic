<?php

namespace App\Http\Controllers;

use App\ViewModel\PacienteViewModel;
use App\ViewModel\FichaPacienteViewModel;
use App\Http\Requests\StoreFichaPaciente;
use Illuminate\Http\Request;
class FichaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *El parametro de id es del paciente
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $fichas = FichaPacienteViewModel::getFichasXPaciente($id);
        return view('Admin.Fichas.fichaPaciente', compact('fichas','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PacienteViewModel $PacienteViewModel, $id)
    {
        $paciente = $PacienteViewModel->getPaciente($id);
        return view('Admin.Fichas.crearFichaPaciente',compact('paciente'));
    }

    /**
     * El request viene del formulario crearFichaPaciente
     */
    public function store(StoreFichaPaciente $request)
    {
        $fichaPaciente = FichaPacienteViewModel::create($request);
        return redirect()->route('ficha.list',$fichaPaciente->IdPaciente);
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
     * El id es del paciente para saber a quien guardar
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($IdFicha)
    {
        $ficha = FichaPacienteViewModel::getFichaXPaciente($IdFicha);
        return view('Admin.Fichas.editarFichaPaciente',compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFichaPaciente $request, $id)
    {
        $ficha = FichaPacienteViewModel::update($request,$id);
        return redirect()->route('ficha.list',$request->IdPaciente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $IdPaciente = FichaPacienteViewModel::delete($request->IdModal);
        return redirect()->route('ficha.list',$IdPaciente);
    }
}
