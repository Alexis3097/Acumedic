<?php

namespace App\ViewModel;
use DB;
use App\User;
use App\Models\Producto;
use App\Models\Direccion;
use App\Models\Inventario;
use App\Models\fotoProducto;
use App\Models\OrdenDeCompra;
use App\Notifications\OrdenCreada;
use App\Events\OrderProductoEvents;

class ProductoViewModel
{

  public function create($productoData){
    $modelProducto =  $productoData->except('_token');
    $producto =  Producto::create($modelProducto);
    if(!is_null($productoData->file('Foto1'))){
      $foto = cloudinary()->upload($productoData->file('Foto1')->getRealPath());
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $foto->getSecurePath();
      $fotoProducto->fotoId = $foto->getPublicId();
      $fotoProducto->Titulo = $productoData->Titulo1;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno1;
      $fotoProducto->save();
    }

      if(!is_null($productoData->file('Foto2'))){
      $foto = cloudinary()->upload($productoData->file('Foto2')->getRealPath());
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $foto->getSecurePath();
      $fotoProducto->fotoId = $foto->getPublicId();
      $fotoProducto->Titulo = $productoData->Titulo2;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno2;
      $fotoProducto->save();
    }
    if(!is_null($productoData->file('Foto3'))){
      $foto = cloudinary()->upload($productoData->file('Foto3')->getRealPath());
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $foto->getSecurePath();
      $fotoProducto->fotoId = $foto->getPublicId();
      $fotoProducto->Titulo = $productoData->Titulo3;
      $fotoProducto->TextoAlterno = $productoData->TextoAlterno3;
      $fotoProducto->save();
    }

    if(!is_null($productoData->file('Foto4'))){
      $foto = cloudinary()->upload($productoData->file('Foto4')->getRealPath());
      $fotoProducto = new fotoProducto;
      $fotoProducto->IdProducto = $producto->id;
      $fotoProducto->Nombre = $foto->getSecurePath();
      $fotoProducto->fotoId = $foto->getPublicId();
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

//      if(!is_null($pacienteData->file('Foto'))){
//
//          $foto = cloudinary()->upload($pacienteData->file('Foto')->getRealPath());
//          $modelPaciente['Foto']  = $foto->getSecurePath();
//          $modelPaciente['FotoId']  =  $foto->getPublicId();
//      }
     if(!is_null($productoData->file('Foto1')))
     {
      $foto = cloudinary()->upload($productoData->file('Foto1')->getRealPath());
      if(isset($producto->fotoProductos[0]->Nombre)){
        $fotoProducto1 = fotoProducto::find($producto->fotoProductos[0]->id);
        $this->deletePhotoCloudinary($fotoProducto1->fotoId);
        $fotoProducto1->Nombre = $foto->getSecurePath();
        $fotoProducto1->fotoId = $foto->getPublicId();
        $fotoProducto1->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre =  $foto->getSecurePath();
        $fotoProductoNuevo->fotoId = $foto->getPublicId();
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

   if(!is_null($productoData->file('Foto2')))
    {
      $foto = cloudinary()->upload($productoData->file('Foto2')->getRealPath());
      if(isset($producto->fotoProductos[1]->Nombre)){
        $fotoProducto2 = fotoProducto::find($producto->fotoProductos[1]->id);
        $this->deletePhotoCloudinary($fotoProducto2->fotoId);
        $fotoProducto2->Nombre = $foto->getSecurePath();
        $fotoProducto2->fotoId = $foto->getPublicId();
        $fotoProducto2->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre =  $foto->getSecurePath();
        $fotoProductoNuevo->fotoId = $foto->getPublicId();
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

    if(!is_null($productoData->file('Foto3')))
    {
        $foto = cloudinary()->upload($productoData->file('Foto3')->getRealPath());
      if(isset($producto->fotoProductos[2]->Nombre)){
        $fotoProducto3 = fotoProducto::find($producto->fotoProductos[2]->id);
        $this->deletePhotoCloudinary($fotoProducto3->fotoId);
        $fotoProducto3->Nombre = $foto->getSecurePath();
        $fotoProducto3->fotoId = $foto->getPublicId();
        $fotoProducto3->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre =  $foto->getSecurePath();
        $fotoProductoNuevo->fotoId = $foto->getPublicId();
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
   if(!is_null($productoData->file('Foto4')))
    {
        $foto = cloudinary()->upload($productoData->file('Foto4')->getRealPath());
      if(isset($producto->fotoProductos[3]->Nombre)){
        $fotoProducto4 = fotoProducto::find($producto->fotoProductos[3]->id);
        $this->deletePhotoCloudinary($fotoProducto4->fotoId);
        $fotoProducto4->Nombre = $foto->getSecurePath();
        $fotoProducto4->fotoId = $foto->getPublicId();
        $fotoProducto4->save();
      }else{
        $fotoProductoNuevo = new fotoProducto;
        $fotoProductoNuevo->IdProducto = $producto->id;
        $fotoProductoNuevo->Nombre =  $foto->getSecurePath();
        $fotoProductoNuevo->fotoId = $foto->getPublicId();
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
    if(!is_null($producto)){
      if(isset($producto->inventario)){
        $inventario = Inventario::where('producto_id',$id)->first();
        $inventario->delete();
      }
      $fotoProductos = fotoProducto::where('IdProducto', $id)->get();
      foreach ($fotoProductos as $foto){
        $this->deletePhotoCloudinary($foto->fotoId);
        $foto->delete();
      }
      $producto->delete();
    }
    return $producto;
  }
  public function deleteProductPhoto($nombreFoto){
    $rutaImagen = public_path().'/uploads/productos/'.$nombreFoto;
    if (@getimagesize($rutaImagen)){
      unlink($rutaImagen);
    }
  }

  public function  deletePhotoCloudinary($fotoId){
      cloudinary()->destroy($fotoId);
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

  public function buscarProducto($nombre, $variableurl){
    $producto = Producto::where('Nombre', 'like','%' . $nombre. '%')
                  ->paginate(15)->appends($variableurl);
      return $producto;
  }

  public function eliminarFotoProducto($IdFoto){
    $fotoProducto = fotoProducto::find($IdFoto);
    $this->deletePhotoCloudinary($fotoProducto->fotoId);
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
    $this->notificacionOrdenDeCompra($orden);
    return $orden;

  }

  /**
   * crea la direccion de la orden
   */
  public function crearDireccion($ordenData){
    $DireccionModel = Direccion::create($ordenData->toArray());
    return $DireccionModel;

  }

  public function notificacionOrdenDeCompra($orden){
    event(new OrderProductoEvents($orden));
    return;
  }


}
