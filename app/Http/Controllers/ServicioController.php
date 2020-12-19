<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:ListadoUsuarios|CrearUsuario|EditarUsuario|EliminarUsuario']);
    }

    public function index(){
        return view('Admin.Servicios.servicios');
    }

    public function create(){
        return view('Admin.Servicios.CrearServicio');
    }
}
