<?php

namespace App\ViewModel;
use App\Models\Inventario;
use App\Models\Producto;
class InventarioViewModel
{
    public function agregarInventario($IdProducto, $Cantidad){
      $producto = Producto::find($IdProducto);
      if(isset($producto->inventario)){
        $inventario = Inventario::where('producto_id',$IdProducto)->first();
        $inventario->Cantidad += $Cantidad;
        $inventario->save();
        return $inventario;
      }
      else{
        $inventarioNew = new Inventario;
        $inventarioNew->producto_id = $IdProducto;
        $inventarioNew->Cantidad = $Cantidad;
        $inventarioNew->StockMinimo = 0;
        $inventarioNew->save();
        return $inventarioNew;
      }
    }

    public function update($IdProducto, $Cantidad, $Stock){
      $producto = Producto::find($IdProducto);
      if(isset($producto->inventario)){
        $inventario = Inventario::where('producto_id',$IdProducto)->first();
        $inventario->Cantidad = $Cantidad;
        $inventario->StockMinimo = $Stock;
        $inventario->save();
        return $inventario;
      }
      else{
        $inventarioNew = new Inventario;
        $inventarioNew->producto_id = $IdProducto;
        $inventarioNew->Cantidad = $Cantidad;
        $inventarioNew->StockMinimo = $Stock;
        $inventarioNew->save();
        return $inventarioNew;
      }
    }

    public function destroy($IdProducto){
      $producto = Producto::find($IdProducto);
      $inventario = Inventario::where('producto_id',$IdProducto)->first();
      $inventario->delete();
      return $inventario;
      
    }
   
}