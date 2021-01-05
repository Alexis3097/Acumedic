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

    public function nosotros(SobreAcumedicViewModel $SobreAcumedicViewModel,ServicioViewModel $ServicioViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->datosPrimeraSeccion();
        $segundaSeccion = $SobreAcumedicViewModel->datosSegundaSeccion();
        $contacto = $SobreAcumedicViewModel->contacto();
        $verServicio = $ServicioViewModel->verServicio();
        $numeroDeServicios = $ServicioViewModel->numeroDeServicios();
        if($verServicio->Servicios && $numeroDeServicios >= 6){
            $servicios = $ServicioViewModel->seisServicios();
            return view('Cliente.nosotrosConServicios',compact('sobreAcumedic','segundaSeccion','contacto','servicios'));
        }
        return view('Cliente.nosotros',compact('sobreAcumedic','segundaSeccion','contacto'));
    }
}
