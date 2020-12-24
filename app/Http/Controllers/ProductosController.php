<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;
use App\ViewModel\ProductoViewModel;
use App\Http\Requests\UpdateProducto;

class ProductosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware(['permission:ListadoUsuarios|CrearUsuario|EditarUsuario|EliminarUsuario']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductoViewModel $ProductoViewModel)
    {
        $productos = $ProductoViewModel->getProductos();
        // $productos->fotoProductos();
        return view('Admin.Productos.productos',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Productos.crearProducto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreProducto  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProducto $request, ProductoViewModel $ProductoViewModel)
    {
        $producto = $ProductoViewModel->create($request);
        return redirect()->route('productos.list');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoViewModel $ProductoViewModel, $id)
    {
        $producto = $ProductoViewModel->getProducto($id);
        return view('Admin.Productos.editarProducto',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateProducto  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProducto $request, $id, ProductoViewModel $ProductoViewModel)
    {
       $producto = $ProductoViewModel->update($request, $id);
       return redirect()->route('productos.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ProductoViewModel $ProductoViewMode)
    {
        $producto = $ProductoViewMode->delete($request->IdModal);
        return redirect()->route('productos.list');
    }
}
