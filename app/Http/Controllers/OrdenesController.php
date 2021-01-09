<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ViewModel\OrdenDeCompraViewModel;

class OrdenesController extends Controller
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
    public function index(OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $ordenes = $OrdenDeCompraViewModel->getAllOrdenDeCompra();
        return view('Admin.Ordenes.ordenes',compact('ordenes'));
    }

    /**
     * cambia el estatus de la orden dependiendo la que haya elegido el admin o el de ventas de productos
     */
    public function changeEstatus(Request $request, OrdenDeCompraViewModel $OrdenDeCompraViewModel)
    {
        $OrdenDeCompraViewModel->changeEstatus($request->IdOrden, $request->IdEstatus);
        return redirect()->route('ordenes.list');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
