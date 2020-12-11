<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\SexoViewModel;
use App\Http\Requests\StoreUsuario;
use App\ViewModel\UsuarioViewModel;
use App\Http\Requests\UpdateUsuario;

class usuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(UsuarioViewModel $UsuarioViewModel){
        $usuarios = $UsuarioViewModel->getUsuarios();
        return view('Admin.Usuarios.usuarios',compact('usuarios'));
    }

    public function create(){
        $sexos = SexoViewModel::getSexos();
        return view('Admin.Usuarios.crearUsuario',compact('sexos'));
    }

    public function store(StoreUsuario $request, UsuarioViewModel $UsuarioViewModel){
        $usuario = $UsuarioViewModel->create($request);
        return redirect()->route('usuarios.list');
    }

    public function edit($IdUsuario, UsuarioViewModel $UsuarioViewModel){
        $sexos = SexoViewModel::getSexos();
        $usuario = $UsuarioViewModel->getUsuarioXId($IdUsuario);
        return view('Admin.Usuarios.editarUsuario',compact('sexos','usuario'));
    }

    public function update(UpdateUsuario $request,$IdUsuario, UsuarioViewModel $UsuarioViewModel){
        $usuario = $UsuarioViewModel->update($request,$IdUsuario);
        return redirect()->route('usuarios.list');
    }

    public function delete(Request $request, UsuarioViewModel $UsuarioViewModel)
    {
        $usuario = $UsuarioViewModel->delete($request->IdModal);
        return redirect()->route('usuarios.list');
    }
}
