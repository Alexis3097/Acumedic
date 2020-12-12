<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\PermisosViewModel;

class PermisosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(PermisosViewModel $PermisosViewModel)
    {
        $permisos = $PermisosViewModel->getPermisos();
        return view('Admin.Permisos.permisos',compact('permisos'));
    }
    /**
     * muestra el listado de roles existentes
     */
    public function rol(PermisosViewModel $PermisosViewModel)
    {
        $roles = $PermisosViewModel->getRoles();
        return view('Admin.Permisos.roles',compact('roles'));
    }
    
    public function crearRol()
    {
        return view('Admin.Permisos.createRol');
    }

    public function guardarRol(Request $request, PermisosViewModel $PermisosViewModel)
    {
        $rol = $PermisosViewModel->crearRol($request);
        return redirect()->route('permisos.rol');
    }

    public function editarRol($id, PermisosViewModel $PermisosViewModel)
    {
        $permisos = $PermisosViewModel->getPermisosXRol($id);
        $rol = $PermisosViewModel->getRolXid($id)->toArray();
        return view('Admin.Permisos.editRol', compact('permisos','rol'));
    }

    public function actualziarRol(Request $request, $id, PermisosViewModel $PermisosViewModel)
    {
        $rol = $PermisosViewModel->update($request,$id);
        return redirect()->route('permisos.rol');
    }
}
