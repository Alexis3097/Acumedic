<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreServicio;
use App\ViewModel\ServicioViewModel;
use App\Http\Requests\buscarProducto;
use App\Http\Requests\UpdateServicio;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:ListadoServicio|CrearServicio|EditarServicio|EliminarServicio']);
    }

    public function index(ServicioViewModel $ServicioViewModel){
        $servicios = $ServicioViewModel->getServicios();
        return view('Admin.Servicios.servicios',compact('servicios'));
    }

    public function create(){
        return view('Admin.Servicios.crearServicio');
    }

    public function store(StoreServicio $request, ServicioViewModel $ServicioViewModel){
        $servicio = $ServicioViewModel->create($request);
        return redirect()->route('servicios.list');
    }

    public function edit($id, ServicioViewModel $ServicioViewModel){
        $servicio = $ServicioViewModel->getServicio($id);
        return view('Admin.Servicios.editarServicio', compact('servicio'));
    }

    public function update($id,UpdateServicio $request, ServicioViewModel $ServicioViewModel){
        $servicio = $ServicioViewModel->update($id,$request);
        return redirect()->route('servicios.list');
    }

    public function destroy(Request $request, ServicioViewModel $ServicioViewModel){
        $servicio = $ServicioViewModel->delete($request->IdModal);
        return redirect()->route('servicios.list');
    }

    public function buscar(Request $request, ServicioViewModel $ServicioViewModel){
        $variableurl = $request->all();
        $servicios = $ServicioViewModel->buscarServicios($request->Nombre, $variableurl);
        return view('Admin.Servicios.buscarServicios',compact('servicios')); 
    }
}
