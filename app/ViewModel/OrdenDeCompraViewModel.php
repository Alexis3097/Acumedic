<?php

namespace App\ViewModel;
use App\Models\Direccion;
use App\Models\Inventario;
use App\Models\OrdenDeCompra;

class OrdenDeCompraViewModel
{
  /**
   * retorna las ordenes de compra con estatus 1 = pendiente o 2  = proceso
   */
  public function getPedidosPendientes()
  {
    return OrdenDeCompra::where('IdEstatusSolicitud',1)->orWhere('IdEstatusSolicitud',2)->paginate(15);
  }
  /**
   * retorna todas las ordenes en orden de la más nueva a la más vieja
   */
  public function getAllOrdenes(){
    return OrdenDeCompra::orderBy('id','desc')->paginate(15);
  }

  public function buscar($Nombre, $vairableurl){
    $orden = OrdenDeCompra::where('NombreCompleto', 'like','%' . $Nombre. '%')->paginate(15)->appends($vairableurl);
    return $orden;
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
      if($IdEstatus == 3 && $orden->IdEstatusSolicitud != 3)//Estatus tres es completado por lo tanto restaomos la cantidad de producto del inventario
      {
        $this->restarInventario($orden->IdProducto, $orden->Cantidad);
      }
      $orden->IdEstatusSolicitud = $IdEstatus;
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