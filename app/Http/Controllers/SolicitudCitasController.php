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

    public function index(CitaViewModel $CitaViewModel){
        $solicitudCitas = $CitaViewModel->getAllSolicitudCitas();
        return view('Admin.Citas.solicitudCitas',compact('solicitudCitas'));
    }

    public function changeEstatus(Request $request, CitaViewModel $CitaViewModel){
        $CitaViewModel->changeEstatusSolicitudCita($request->IdSolicitudCita,$request->IdEstatus);
        return redirect()->route('solicitudCita.show');
    }
}
