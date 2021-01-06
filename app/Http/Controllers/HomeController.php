<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\CitaViewModel;
use App\ViewModel\PacienteViewModel;

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
    public function index(CitaViewModel $CitaViewModel, PacienteViewModel $PacienteViewModel)
    {
        $citas = $CitaViewModel->getCitasInicio();
        $citasDelDia = $CitaViewModel->numeroCitasDelDia();
        $totalPacientes = $PacienteViewModel->totalPacientes();
        return view('Admin.home',compact('citas','citasDelDia','totalPacientes'));
    }

    public function doLogout()
    {
        return redirect()->route('inicio');
    }
}
