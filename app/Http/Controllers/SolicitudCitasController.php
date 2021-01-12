<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\CitaViewModel;

class SolicitudCitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['permission:SobreAcumedic']);
    }
/**
 * retorna solicitudes de citas pendientes
 */
    public function index(CitaViewModel $CitaViewModel){
        $solicitudCitas = $CitaViewModel->getSolicitudCitasPendientes();
        return view('Admin.Citas.solicitudCitas',compact('solicitudCitas'));
    }

    public function changeEstatus(Request $request, CitaViewModel $CitaViewModel){
        $CitaViewModel->changeEstatusSolicitudCita($request->IdSolicitudCita,$request->IdEstatus);
        return redirect()->route('solicitudCita.pendientes');
    }
    /**
     * retorna todas las solicitudes
     */
    public function todas( CitaViewModel $CitaViewModel){
        $solicitudCitas = $CitaViewModel->getAllSolicitudCitas();
        return view('Admin.Citas.AllsolicitudCitas',compact('solicitudCitas'));
    }

    /**
     * retorna las solicirudes segun la busqueda
     */
    public function buscar(Request $request,CitaViewModel $CitaViewModel){
        $variableurl = $request->all();
        $solicitudCitas = $CitaViewModel->buscar($request->Nombre,$variableurl);
        return view('Admin.Citas.AllsolicitudCitas',compact('solicitudCitas'));
    }
}
