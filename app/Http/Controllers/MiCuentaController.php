<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\SexoViewModel;
use App\Http\Requests\UpdateAcount;
use App\ViewModel\UsuarioViewModel;
use App\Http\Requests\updatePasswordAcount;

class MiCuentaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.miCuenta.usuarioPerfil');
    }

    public function changePassword(updatePasswordAcount $request, UsuarioViewModel $UsuarioViewModel){
        if($request->ajax()){
            $UsuarioViewModel->changePasswordMiCuenta($request->idUsuario, $request->password);
        }
    }

    public function edit($IdUsuario, UsuarioViewModel $UsuarioViewModel){
        $sexos = SexoViewModel::getSexos();
        $usuario = $UsuarioViewModel->getUsuarioXId($IdUsuario);
        return view('Admin.miCuenta.editarUsuario',compact('sexos','usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAcount $request,$IdUsuario, UsuarioViewModel $UsuarioViewModel){
        $usuario = $UsuarioViewModel->updateMyAcount($request,$IdUsuario);
        return redirect()->route('miCuenta.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
