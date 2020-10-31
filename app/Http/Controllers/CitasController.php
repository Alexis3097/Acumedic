<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Horario;
use App\ViewModel\CitaViewModel;
use App\Http\Requests\StoreCita;
use Illuminate\Http\Request;
use Carbon\Carbon;
class CitasController extends Controller
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
    public function index()
    {  
        $Citas = CitaViewModel::getCitas();
        return view('Admin.Citas.citas', compact('Citas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = CitaViewModel::getFecha();
        $tipoConsultas = CitaViewModel::getTipoConsulta();
        $horarios = CitaViewModel::getHorarios();
        return view('Admin.Citas.crearCita', compact('fecha','tipoConsultas','horarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCita $request, CitaViewModel $CitaViewModel)
    {
        $cita = $CitaViewModel->create($request);
        return redirect()->route('citas.list');
        
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
    public function edit(CitaViewModel $CitaViewModel,$id)
    {
        $cita = $CitaViewModel->getCita($id);
        $horariosXCita = $CitaViewModel->getHorariosXCita($id);
        $fecha = CitaViewModel::getFecha();
        $tipoConsultas = CitaViewModel::getTipoConsulta();
        $horarios = CitaViewModel::getHorarios();
        return view('Admin.Citas.editarCita', compact('fecha','tipoConsultas','horarios', 'cita','horariosXCita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCita $request, CitaViewModel $CitaViewModel, $id)
    {
        $cita = $CitaViewModel->update($request, $id);
        return redirect()->route('citas.list');
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

    public function horarios(Request $request, CitaViewModel $CitaViewModel)
    {
        if($request->ajax())
        {
            $horariosDisponibles = $CitaViewModel->getHorariosDisponibles($request->fecha);
            return response()->json($horariosDisponibles);
        }
    }
}
