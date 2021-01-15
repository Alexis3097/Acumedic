<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\CitaViewModel;
use App\ViewModel\PacienteViewModel;
use App\ViewModel\OrdenDeCompraViewModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(CitaViewModel $CitaViewModel, PacienteViewModel $PacienteViewModel, OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $citas = $CitaViewModel->getCitasInicio();
        $numeroSolicitudPendientes = $CitaViewModel->getNumeroSolicitudPendientes();
        $numeroOrdenes = $OrdenDeCompraViewModel->getNumeroPedidosPendientes();
        $citasDelDia = $CitaViewModel->numeroCitasDelDia();
        $totalPacientes = $PacienteViewModel->totalPacientes();
        return view('Admin.home',compact('citas','citasDelDia','totalPacientes','numeroSolicitudPendientes','numeroOrdenes'));
    }

    public function doLogout()
    {
        return redirect()->route('inicio');
    }
}
