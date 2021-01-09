<?php

namespace App\ViewModel;
use DB;
use App\Models\Producto;
use App\Models\Direccion;
use App\Models\Inventario;
use App\Models\fotoProducto;
use App\Models\OrdenDeCompra;

class ProductoViewModel
{

  public function create($productoData){
    $modelProducto =  $productoData->except('_token');
    $producto =  Producto::create($modelProducto);

    if($archivo1 = $productoData->file('Foto1'))
    {
      $nombre = time().'1'.'.'.$archivo1->getClientOriginalExtension();
      $archivo1->move('uploads/productos', $nombre);
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $nombre;
      $fotoProducto->Titulo = $productoData->Titulo1;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno1;
      $fotoProducto->save();
    }
    
    if($archivo2 = $productoData->file('Foto2'))
    {
      $nombre = time().'2'.'.'.$archivo2->getClientOriginalExtension();
      $archivo2->move('uploads/productos', $nombre);
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $nombre;
      $fotoProducto->Titulo = $productoData->Titulo2;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno2;
      $fotoProducto->save();
    }

    if($archivo3 = $productoData->file('Foto3'))
    {
      $nombre = time().'3'.'.'.$archivo3->getClientOriginalExtension();
      $archivo3->move('uploads/productos', $nombre);
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $nombre;
      $fotoProducto->Titulo = $productoData->Titulo3;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno3;
      $fotoProducto->save();
    }

    if($archivo4 = $productoData->file('Foto4'))
    {
      $nombre = time().'4'.'.'.$archivo4->getClientOriginalExtension();
      $archivo4->move('uploads/productos', $nombre);
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $nombre;
      $fotoProducto->Titulo = $productoData->Titulo4;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno4;
      $fotoProducto->save();
    }
    return $producto;
    
  }

  public function update($productoData, $id){
    $producto = Producto::find($id);
    $producto->Nombre = $productoData->Nombre;
    $producto->PrecioCompra = $productoData->PrecioCompra;
    $producto->PrecioPublico = $productoData->PrecioPublico;
    $producto->Estrellas = $productoData->Estrellas;
    $producto->DescripcionCorta = $productoData->DescripcionCorta;
    $producto->DescripcionLarga = $productoData->DescripcionLarga;
    $producto->CodigoBarra = $productoData->CodigoBarra;
    $producto->save();

    if($archivo1 = $productoData->file('Foto1'))
    {
      $nombre = time().'1'.'.'.$archivo1->getClientOriginalExtension();
      $archivo1->move('uploads/productos', $nombre);

      if(isset($producto->fotoProductos[0]->Nombre)){
        $fotoProducto1 = fotoProducto::find($producto->fotoProductos[0]->id);
        $this->deleteProductPhoto($fotoProducto1->Nombre);
        $fotoProducto1->Nombre = $nombre;
        $fotoProducto1->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre = $nombre;
        $fotoProductoNuevo->Titulo = $productoData->Titulo1;
        $fotoProductoNuevo->TextoAlterno =  $productoData->TextoAlterno1;
        $fotoProductoNuevo->save();
      }
    }
    if(isset($producto->fotoProductos[0]->Nombre)){
      $fotoProducto = fotoProducto::find($producto->fotoProductos[0]->id);
      $fotoProducto->Titulo = $productoData->Titulo1;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno1;
      $fotoProducto->save();
    }

    if($archivo2 = $productoData->file('Foto2'))
    {
      $nombre = time().'2'.'.'.$archivo2->getClientOriginalExtension();
      $archivo2->move('uploads/productos', $nombre);

      if(isset($producto->fotoProductos[1]->Nombre)){
        $fotoProducto2 = fotoProducto::find($producto->fotoProductos[1]->id);
        $this->deleteProductPhoto($fotoProducto2->Nombre);
        $fotoProducto2->Nombre = $nombre;
        $fotoProducto2->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre = $nombre;
        $fotoProductoNuevo->Titulo = $productoData->Titulo2;
        $fotoProductoNuevo->TextoAlterno =  $productoData->TextoAlterno2;
        $fotoProductoNuevo->save();
      }
    }
    if(isset($producto->fotoProductos[1]->Nombre)){
      $fotoProducto = fotoProducto::find($producto->fotoProductos[1]->id);
      $fotoProducto->Titulo = $productoData->Titulo2;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno2;
      $fotoProducto->save();
    }

    if($archivo3 = $productoData->file('Foto3'))
    {
      $nombre = time().'3'.'.'.$archivo3->getClientOriginalExtension();
      $archivo3->move('uploads/productos', $nombre);

      if(isset($producto->fotoProductos[2]->Nombre)){
        $fotoProducto3 = fotoProducto::find($producto->fotoProductos[2]->id);
        $this->deleteProductPhoto($fotoProducto3->Nombre);
        $fotoProducto3->Nombre = $nombre;
        $fotoProducto3->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre = $nombre;
        $fotoProductoNuevo->Titulo = $productoData->Titulo3;
        $fotoProductoNuevo->TextoAlterno =  $productoData->TextoAlterno3;
        $fotoProductoNuevo->save();
      }
    }
    if(isset($producto->fotoProductos[2]->Nombre)){
      $fotoProducto = fotoProducto::find($producto->fotoProductos[2]->id);
      $fotoProducto->Titulo = $productoData->Titulo3;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno3;
      $fotoProducto->save();
    }
    if($archivo4 = $productoData->file('Foto4'))
    {
      $nombre = time().'4'.'.'.$archivo4->getClientOriginalExtension();
      $archivo4->move('uploads/productos', $nombre);

      if(isset($producto->fotoProductos[3]->Nombre)){
        $fotoProducto4 = fotoProducto::find($producto->fotoProductos[3]->id);
        $this->deleteProductPhoto($fotoProducto4->Nombre);
        $fotoProducto4->Nombre = $nombre;
        $fotoProducto4->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre = $nombre;
        $fotoProductoNuevo->Titulo = $productoData->Titulo4;
        $fotoProductoNuevo->TextoAlterno =  $productoData->TextoAlterno4;
        $fotoProductoNuevo->save();
      }
    }
    if(isset($producto->fotoProductos[3]->Nombre)){
      $fotoProducto = fotoProducto::find($producto->fotoProductos[3]->id);
      $fotoProducto->Titulo = $productoData->Titulo4;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno4;
      $fotoProducto->save();
    }

    
    return $producto;
  }

  public function delete($id){
    $producto = Producto::find($id);
    if(isset($producto->inventario)){
      $inventario = Inventario::where('producto_id',$id)->first();
      $inventario->delete();
    }
    $fotoProductos = fotoProducto::where('IdProducto', $id)->get();
    foreach ($fotoProductos as $foto){
      $this->deleteProductPhoto($foto->Nombre);
      $foto->delete();
    }
    $producto->delete();
    return $producto;
  }
  public function deleteProductPhoto($nombreFoto){
    $rutaImagen = public_path().'/uploads/productos/'.$nombreFoto;
    if (@getimagesize($rutaImagen)){
      unlink($rutaImagen);
    }
  }
  public function getProductos()
  {
    return Producto::paginate(15);
  }

  public function getProducto($IdProducto)
  {
    return Producto::find($IdProducto);
  }

  public function ProductosParaVenta()
  {
    return Producto::all();
  }

  public function otrosProductosParaVenta($id)
  {
    return Producto::where('id', '!=',$id)->take(4)->orderBy('id','desc')->get();
  }

  public function buscarProducto($nombre){
    $producto = Producto::where('Nombre', 'like','%' . $nombre. '%')
                  ->get();
      return $producto;
  }

  public function eliminarFotoProducto($IdFoto){
    $fotoProducto = fotoProducto::find($IdFoto);
    $this->deleteProductPhoto($fotoProducto->Nombre);
    $fotoProducto->delete();
    return $fotoProducto;

  }

  //CREAR ORDEN DE COMPRA DE PRODUCTO 

  /**
   * recibe los datos de una nueva orden de producto
   */
  public function generarOrden($ordenData){
    $_ESTATUS_PENDIENTE = 1; //el estatus uno significa que esta pendiente

    $direccion = $this->crearDireccion($ordenData);
    $producto = Producto::find($ordenData->IdProducto);
    $TOTAL = $producto->PrecioPublico * $ordenData->Cantidad;
    $orden = new OrdenDeCompra;
    $orden->IdProducto = $ordenData->IdProducto;
    $orden->IdDireccion = $direccion->id;
    $orden->IdEstatusSolicitud = $_ESTATUS_PENDIENTE;
    $orden->NombreCompleto = $ordenData->NombreCompleto;
    $orden->Correo = $ordenData->Correo;
    $orden->Telefono = $ordenData->Telefono;
    $orden->Cantidad = $ordenData->Cantidad;
    $orden->Total = $TOTAL;
    $orden->save();
    return $orden;

  }

  /**
   * crea la direccion de la orden
   */
  public function crearDireccion($ordenData){
    $DireccionModel = Direccion::create($ordenData->toArray());
    return $DireccionModel;
    
  }

 
}