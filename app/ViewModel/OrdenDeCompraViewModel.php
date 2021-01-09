<?php

namespace App\ViewModel;
use App\Models\Direccion;
use App\Models\Inventario;
use App\Models\OrdenDeCompra;

class OrdenDeCompraViewModel
{
  public function getAllOrdenDeCompra()
  {
    return OrdenDeCompra::all();
  }

  public function getOrdenDeCompra($Id)
  {
    return OrdenDeCompra::find($Id);
  }

  /**
   * Cambia el estatus de la orden
   */

    public function changeEstatus($IdOrden, $IdEstatus){
      $orden = OrdenDeCompra::find($IdOrden);
      if($IdEstatus == 3 && $orden->IdEstatusOrden != 3)//Estatus tres es completado por lo tanto restaomos la cantidad de producto del inventario
      {
        $this->restarInventario($orden->IdProducto, $orden->Cantidad);
      }
      $orden->IdEstatusOrden = $IdEstatus;
      $orden->save();
      return $orden;

    }
  /**
   * Resta productos al inventario
   */
    public function restarInventario($IdProducto, $Cantidad){
      $inventario = Inventario::where('producto_id', $IdProducto)->first();
      if(!is_null($inventario)){
       $inventario->Cantidad -= $Cantidad;
       $inventario->save();
      }
      return;
    }
}