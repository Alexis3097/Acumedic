<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ViewModel\ServicioViewModel;
use App\ViewModel\SobreAcumedicViewModel;

class HomeController extends Controller
{
    public function index(ServicioViewModel $ServicioViewModel, SobreAcumedicViewModel $SobreAcumedicViewModel){
        $servicios = $ServicioViewModel->getServiciosAMostrar();
        $sobreAcumedic = $SobreAcumedicViewModel->datosPrimeraSeccion();
        return view('Cliente.inicio',compact('servicios','sobreAcumedic'));
    }

    public function nosotros(SobreAcumedicViewModel $SobreAcumedicViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->datosPrimeraSeccion();
        $segundaSeccion = $SobreAcumedicViewModel->datosSegundaSeccion();
        $contacto = $SobreAcumedicViewModel->contacto();
        return view('Cliente.nosotros',compact('sobreAcumedic','segundaSeccion','contacto'));
    }
}
