<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ViewModel\ServicioViewModel;

class ServicioController extends Controller
{
    public function index(ServicioViewModel $ServicioViewModel){
        $servicios = $ServicioViewModel->getAllServicios();
        return view('Cliente.servicios',compact('servicios'));
    }

    public function show($id, ServicioViewModel $ServicioViewModel){
        $servicio = $ServicioViewModel->getServicio($id);
        $otrosServicios = $ServicioViewModel->otrosServicios($id);
        return view('Cliente.servicio-detallado',compact('servicio','otrosServicios'));
    }
}
