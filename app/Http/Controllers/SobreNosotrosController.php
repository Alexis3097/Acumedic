<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateInfo;
use App\ViewModel\ServicioViewModel;
use App\Http\Requests\StoreSobreAcumedic;
use App\ViewModel\SobreAcumedicViewModel;
use App\Http\Requests\StoreServiciosSeleted;

class SobreNosotrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:SobreAcumedic']);
    }

    public function index(ServicioViewModel $ServicioViewModel){
        $servicios = $ServicioViewModel->getAllServicios();
        $verSeccion = $ServicioViewModel->verSeccion();
        $numeroDeServicios = $ServicioViewModel->numeroDeServicios();
        return view('Admin.paginaNosotros.sobreAcumedic',compact('servicios','verSeccion','numeroDeServicios'));
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

    public function serviciosSeleccionados(StoreServiciosSeleted $request, SobreAcumedicViewModel $SobreAcumedicViewModel){
        if($request->ajax())
        {   
            $SobreAcumedicViewModel->agregarServicios($request->servicios);
        }
    }

    public function visibilidadServicio(Request $request, ServicioViewModel $ServicioViewModel){
        $visibilidad = $ServicioViewModel->updateVisibilidadServicio($request->opcion);
        return redirect()->route('sobreNosotros');
    }

    /**
     * cambia la visibilidad de la segunda seccion, si puede o no estar visible en la parte de admin
     */
    public function visibilidadSegundaSeccion(Request $request, ServicioViewModel $ServicioViewModel){
        $visibilidad = $ServicioViewModel->updateVisibilidadSegundaSeccion($request->opcion);
        return redirect()->route('sobreNosotros');
    }
   
}
