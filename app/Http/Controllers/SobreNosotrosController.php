<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateInfo;
use App\ViewModel\ServicioViewModel;
use App\Http\Requests\StoreSobreAcumedic;
use App\ViewModel\SobreAcumedicViewModel;

class SobreNosotrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ServicioViewModel $ServicioViewModel){
        $servicios = $ServicioViewModel->getAllServicios();
        return view('Admin.paginaNosotros.sobreAcumedic',compact('servicios'));
    }

    public function descripcion(SobreAcumedicViewModel $SobreAcumedicViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->datosPrimeraSeccion();
        return view('Admin.paginaNosotros.descripcionUno',compact('sobreAcumedic'));
    }

    public function segundaSeccion(SobreAcumedicViewModel $SobreAcumedicViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->datosSegundaSeccion();
        return view('Admin.paginaNosotros.descripcionDos',compact('sobreAcumedic'));
    }

    public function editarDescripcion(StoreSobreAcumedic $request, SobreAcumedicViewModel $SobreAcumedicViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->updateDescripcion($request->id,$request);
        return redirect()->route('sobreNosotros');
    }

    public function datosContacto(Request $request, SobreAcumedicViewModel $SobreAcumedicViewModel){
        if($request->ajax())
        {   
            $contacto = $SobreAcumedicViewModel->contacto();
            return response()->json($contacto);
        }
    }

    public function editarSegundaSeccion(StoreSobreAcumedic $request, SobreAcumedicViewModel $SobreAcumedicViewModel){
        $sobreAcumedic = $SobreAcumedicViewModel->updateSegundaSeccion($request->id,$request);
        return redirect()->route('sobreNosotros');
    }

    public function updateContacto(UpdateInfo $request, SobreAcumedicViewModel $SobreAcumedicViewModel){
        if($request->ajax())
        {   
            $SobreAcumedicViewModel->updateContacto($request->id,$request);
        }
    }

   
}
