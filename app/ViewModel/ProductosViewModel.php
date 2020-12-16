<?php
namespace App\ViewModel;
use App\Models\Producto;
use App\Models\fotoProducto;
class ProductosViewModel
{
    public function getProductos()
    {
        $productos = Producto::all();
    }

    public function create($productoData){

    }
}