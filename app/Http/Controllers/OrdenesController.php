<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\OrdenDeCompraViewModel;

class OrdenesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:OrdenDeCompra']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $ordenes = $OrdenDeCompraViewModel->getPedidosPendientes();
        return view('Admin.Ordenes.ordenes',compact('ordenes'));
    }

    /**
     * cambia el estatus de la orden dependiendo la que haya elegido el admin o el de ventas de productos
     */
    public function changeEstatus(Request $request, OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $OrdenDeCompraViewModel->changeEstatus($request->IdOrden, $request->IdEstatus);
        return redirect()->route('ordenes.pendientes');
    }

    /**
     * retorna todas los pedidos en orden del ultimo al primero
     */
    public function getAllOrdenes(OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $ordenes = $OrdenDeCompraViewModel->getAllOrdenes();
        return view('Admin.Ordenes.Allordenes',compact('ordenes'));
    }

    
    public function buscar(Request $request, OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $variableurl = $request->all();
        $ordenes = $OrdenDeCompraViewModel->buscar($request->buscar, $variableurl);
        return view('Admin.Ordenes.Allordenes',compact('ordenes'));
    }

  /**
   * busca ordenes especificos  por id
   */
    public function buscarXId($id,$idnotify, OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $ordenes = $OrdenDeCompraViewModel->buscarXId($id);
        $OrdenDeCompraViewModel->marcarNotificacion($idnotify);
        return view('Admin.Ordenes.Allordenes',compact('ordenes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
