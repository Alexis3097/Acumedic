<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\EstudioGabineteViewModel;
use App\Http\Requests\StoreEstudioGabinete;

class EstudiosGabineteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:EstudiosGabinete');
    }

    public function index(EstudioGabineteViewModel $EstudioGabineteViewModel, $IdPaciente)
    {
        $estudiosGabinete = $EstudioGabineteViewModel->getFotos($IdPaciente);
       return view('Admin.datosDeConsulta.estudiosGabinete',compact('IdPaciente','estudiosGabinete'));
    }

 

    public function guardarFoto(StoreEstudioGabinete $request, EstudioGabineteViewModel $EstudioGabineteViewModel)
    {
        if($request->ajax()){
            $datos = $EstudioGabineteViewModel->create($request);
            $estudiosGabinete = $EstudioGabineteViewModel->getFotos($datos->IdPaciente);
            // $IdPaciente = $datos->IdPaciente;
        }
        // return redirect()->route('consulta.estudioGabinete', $IdPaciente);
    }

    public function eliminarFoto(Request $request, EstudioGabineteViewModel $EstudioGabineteViewModel)
    {
       $foto = $EstudioGabineteViewModel->delete($request->IdModal);
       return redirect()->route('consulta.estudioGabinete',$request->IdPaciente);
    }

}
