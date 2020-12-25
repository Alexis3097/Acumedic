<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\SexoViewModel;
use App\Http\Requests\StoreUsuario;
use App\ViewModel\UsuarioViewModel;
use App\Http\Requests\UpdateUsuario;
use App\ViewModel\PermisosViewModel;
use App\Http\Requests\UpdateUserPassword;
use App\Http\Requests\BuscarPacienteXCita;

class usuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:ListadoUsuarios|CrearUsuario|EditarUsuario|EliminarUsuario']);
    }

    public function index(UsuarioViewModel $UsuarioViewModel){
        $usuarios = $UsuarioViewModel->getUsuarios();
        return view('Admin.Usuarios.usuarios',compact('usuarios'));
    }

    public function create(PermisosViewModel $PermisosViewModel){
        $roles = $PermisosViewModel->getRoles();
        $sexos = SexoViewModel::getSexos();
        return view('Admin.Usuarios.crearUsuario',compact('sexos','roles'));
    }

    public function store(StoreUsuario $request, UsuarioViewModel $UsuarioViewModel){
        $usuario = $UsuarioViewModel->create($request);
        return redirect()->route('usuarios.list');
    }

    public function edit($IdUsuario, UsuarioViewModel $UsuarioViewModel, PermisosViewModel $PermisosViewModel){
        $roles = $PermisosViewModel->getRoles();
        $sexos = SexoViewModel::getSexos();
        $usuario = $UsuarioViewModel->getUsuarioXId($IdUsuario);
        $rolQueTengo = implode(" ",$usuario->getRoleNames()->toArray());
        return view('Admin.Usuarios.editarUsuario',compact('sexos','usuario','roles','rolQueTengo'));
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

    public function buscarUsuario(BuscarPacienteXCita $request, UsuarioViewModel $UsuarioViewModel)
    {
        $usuarios = $UsuarioViewModel->buscarUsuario($request->Nombre);
        return view('Admin.Usuarios.usuariosBusqueda',compact('usuarios'));
    }

    public function changePassword(UpdateUserPassword $request, UsuarioViewModel $UsuarioViewModel){

        if($request->ajax()){
            $usuario = $UsuarioViewModel->changePassword($request->idUsuario, $request->password);
        }
       
    }
}
