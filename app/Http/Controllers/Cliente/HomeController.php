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
        $contacto = $SobreAcumedicViewModel->contacto();
        return view('Cliente.inicio',compact('servicios','sobreAcumedic','contacto'));
    }

    public function nosotros(SobreAcumedicViewModel $SobreAcumedicViewModel,ServicioViewModel $ServicioViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->datosPrimeraSeccion();
        $segundaSeccion = $SobreAcumedicViewModel->datosSegundaSeccion();
        $contacto = $SobreAcumedicViewModel->contacto();
        $verSeccion = $ServicioViewModel->verSeccion();
        $numeroDeServicios = $ServicioViewModel->numeroDeServicios();
        // la seccion 1 corresponde al registro dos que es visibilidad de servicios
        if($verSeccion[1]->Ver && $numeroDeServicios >= 6){
            $servicios = $ServicioViewModel->seisServicios();
            return view('Cliente.nosotrosConServicios',compact('sobreAcumedic','segundaSeccion','contacto','servicios','verSeccion'));
        }
        return view('Cliente.nosotros',compact('sobreAcumedic','segundaSeccion','contacto','verSeccion'));
    }
}
