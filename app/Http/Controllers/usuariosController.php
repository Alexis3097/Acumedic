<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function index(){
        return view('Admin.Usuarios.usuarios');
    }
}
