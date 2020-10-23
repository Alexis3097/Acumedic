<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\ViewModel\CitaViewModel;
use App\Http\Requests\StoreCita;
use Illuminate\Http\Request;
use Carbon\Carbon;
class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CitaViewModel $CitaViewModel)
    {
        $Citas = $CitaViewModel->Citas();
        return view('Admin.Citas.citas', compact('Citas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CitaViewModel $CitaViewModel)
    {
        $fecha = $CitaViewModel->fecha();
        $tipoConsultas = $CitaViewModel->tipoConsulta();
        $horarios = $CitaViewModel->horarios();
        $sexos = $CitaViewModel->sexo();
        return view('Admin.Citas.crearCita', compact('fecha','tipoConsultas','horarios','sexos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCita $request)
    {
       dd($request->toArray());
        
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
