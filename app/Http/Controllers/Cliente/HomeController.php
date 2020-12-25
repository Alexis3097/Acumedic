<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ViewModel\ServicioViewModel;

class HomeController extends Controller
{
    public function index(ServicioViewModel $ServicioViewModel){
        $servicios = $ServicioViewModel->getServiciosAMostrar();
        return view('Cliente.inicio',compact('servicios'));
    }
}
