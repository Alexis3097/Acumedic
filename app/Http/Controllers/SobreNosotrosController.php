<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosotrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('Admin.paginaNosotros.sobreAcumedic');
    }

    public function descripcion(){
        return view('Admin.paginaNosotros.descripcionUno');
    }

    public function historia(){
        return view('Admin.paginaNosotros.descripcionDos');
    }
}
