<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\ProductoViewModel;
use App\Http\Requests\buscarProducto;
use App\ViewModel\InventarioViewModel;
use App\Http\Requests\UpdateInventario;
use App\Http\Requests\UpdateProductQuantity;

class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:ListadoInventario|CrearInventario|EditarInventario|EliminarInventario');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductoViewModel $ProductoViewModel)
    {
        $productos = $ProductoViewModel->getProductos();
        return view('Admin.Inventario.inventario',compact('productos'));
    }

    /**
     * actualiza la cantidad de productos en inventario
     */
    public function agregar(UpdateProductQuantity $request, InventarioViewModel $InventarioViewModel)
    {
        if($request->ajax()){
            $inventario = $InventarioViewModel->agregarInventario($request->IdProducto,$request->Cantidad);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInventario $request, InventarioViewModel $InventarioViewModel)
    {
        if($request->ajax()){
            $inventario = $InventarioViewModel->update($request->IdProducto, $request->Cantidad, $request->StockMinimo);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, InventarioViewModel $InventarioViewModel)
    {
        $inventario = $InventarioViewModel->destroy($request->IdModal);
        return redirect()->route('inventario.list');
    }

    public function buscar(buscarProducto $request, ProductoViewModel $ProductoViewModel){
        $productos = $ProductoViewModel->buscarProducto($request->Nombre);
        return view('Admin.Inventario.buscarInventario',compact('productos'));
    }
}
