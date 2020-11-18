<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Horario;
use App\Models\Paciente;
use App\ViewModel\CitaViewModel;
use App\ViewModel\PacienteViewModel;
use App\Http\Requests\StoreCita;
use App\Http\Requests\BuscarRangoFecha;
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
        $estatus = CitaViewModel::getEstatusConsulta();
        $tipoConsultas = CitaViewModel::getTipoConsulta();
        $horarios = CitaViewModel::getHorariosDisponibles(date_create()->format('Y-m-d'));
        return view('Admin.Citas.crearCita', compact('fecha','tipoConsultas','horarios','estatus'));
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

    public function buscarFecha(BuscarRangoFecha $request, CitaViewModel $CitaViewModel)
    {
        $Citas = $CitaViewModel->BuscarCitaXRangoFecha($request);
        return view('Admin.Citas.citas', compact('Citas'));
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
        $horarios = CitaViewModel::getHorariosDisponibles(date_create()->format('Y-m-d'),$id);
        $estatus = CitaViewModel::getEstatusConsulta();
        return view('Admin.Citas.editarCita', compact('fecha','tipoConsultas','horarios', 'cita','horariosXCita','estatus'));
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
    public function destroy(Request $request)
    {
        $cita = CitaViewModel::delete($request->IdModal);
        return redirect()->route('citas.list');
    }

    public function horarios(Request $request)
    {
        if($request->ajax())
        {
            $horariosDisponibles = CitaViewModel::getHorariosDisponibles($request->fecha);
            return response()->json($horariosDisponibles);
        }
    }

    public function horariosEdit(Request $request, CitaViewModel $CitaViewModel)
    {
        if($request->ajax())
        {
            $horariosDisponibles = $CitaViewModel->getHorariosDisponibles($request->fecha,$request->IdCita);
            return response()->json($horariosDisponibles);
        }
    }

    public function paciente(PacienteViewModel $PacienteViewModel, $id)
    {
        $paciente = $PacienteViewModel->getPaciente($id);
        $fecha = CitaViewModel::getFecha();
        $estatus = CitaViewModel::getEstatusConsulta();
        $tipoConsultas = CitaViewModel::getTipoConsulta();
        $horarios = CitaViewModel::getHorariosDisponibles(date_create()->format('Y-m-d'));
        return view('Admin.Citas.crearCitaConPaciente', compact('fecha','tipoConsultas','horarios','paciente','estatus'));
    }
    


}
