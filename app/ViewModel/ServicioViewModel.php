<?php

namespace App\ViewModel;
use App\Models\Servicio;
use App\Models\VerSeccion;
use App\Models\ServiciosSeleccionado;

class ServicioViewModel
{
    public function getServicios()
    {
      return Servicio::paginate(15);
    }

    public function create($servicioData){
      $modelServicio =  $servicioData->except('_token');

      if($Logo = $servicioData->file('Logo'))
        {
          $nombre = time().'Logo'.'.'.$Logo->getClientOriginalExtension();
          $Logo->move('uploads/servicios', $nombre);
          $modelServicio['Logo']  = $nombre;
        }

      if($Imagen = $servicioData->file('Imagen'))
        {
          $nombre = time().'Imagen'.'.'.$Imagen->getClientOriginalExtension();
          $Imagen->move('uploads/servicios', $nombre);
          $modelServicio['Imagen']  = $nombre;
        }

        return Servicio::create($modelServicio);
    }

    public function update($id,$servicioData){
      $servicio = $this->getServicio($id);
      $modelServicio =  $servicioData->except('_token');

      if($Logo = $servicioData->file('Logo'))
        {
          $nombre = time().'Logo'.'.'.$Logo->getClientOriginalExtension();
          $Logo->move('uploads/servicios', $nombre);
          $this->deleteServicePhoto($servicio->Logo);
          $servicio->Logo  = $nombre;
        }

      if($Imagen = $servicioData->file('Imagen'))
        {
          $nombre = time().'Imagen'.'.'.$Imagen->getClientOriginalExtension();
          $Imagen->move('uploads/servicios', $nombre);
          $this->deleteServicePhoto($servicio->Imagen);
          $servicio->Imagen  = $nombre;
        }
        $servicio->Nombre = $servicioData->Nombre;
        $servicio->Precio = $servicioData->Precio;
        $servicio->DescripcionCorta = $servicioData->DescripcionCorta;
        $servicio->DescripcionLarga = $servicioData->DescripcionLarga;
        $servicio->TextoLogo = $servicioData->TextoLogo;
        $servicio->TextoImagen = $servicioData->TextoImagen;
        $servicio->save();
        return $servicio;
    }

    public function delete($id){
      //eliminara los servicios relacionados en la tabla servicioSeleccinado y  cambiara el estatus en la tabla verServicios
      $ServiciosSeleccionado = ServiciosSeleccionado::where('IdServicio', $id)->first();
      if(!is_null($ServiciosSeleccionado)){
        $ServiciosSeleccionado->delete();
        $VerSeccion = VerSeccion::find(2);//El 2 es igual al id 2 que representa servicios visibles
        $VerSeccion->Ver = 0;
        $VerSeccion->save();
      }
      
      $servicio = $this->getServicio($id);
      $servicio->delete();
      return $servicio;
    }

    public function deleteServicePhoto($nombreFoto){
      $rutaImagen = public_path().'/uploads/servicios/'.$nombreFoto;
      if (@getimagesize($rutaImagen)){
        unlink($rutaImagen);
      }
    }

    public function getServicio($id){
      return Servicio::find($id);
    }

    public function buscarServicios($nombre, $variableurl){
      $servicio = Servicio::where('Nombre', 'like','%' . $nombre. '%')
                  ->paginate(15)->appends($variableurl);
      return $servicio;
    }

    public function getAllServicios()
    {
      return Servicio::all();
    }

    public function getServiciosAMostrar()
    {
      return Servicio::take(3)->orderBy('id','desc')->get();
    }

    /**
     * @return Servicios
     * retorna los ultimos 4 servicios exlcuyendo al del id
     * dado, que es el que ya se esta viendo
     */
    public function otrosServicios($id){
      return Servicio::where('id', '!=',$id)->take(4)->orderBy('id','desc')->get();
    }
    /**
     * @return 
     * registro con un campo servicio de tipo bool
     * 
     */
    public function verSeccion(){
      return VerSeccion::all();

    }

    public function seisServicios(){
      return ServiciosSeleccionado::all();
    }

    public function updateVisibilidadServicio($opcion){
      //opcion 1 es que se hara visible
      if($opcion == 1){
        //si hay menos de 6 servicios entonces no poner visible
        if(count(ServiciosSeleccionado::all()) < 6){
          return;
        }
        else{
          // EL ID 2 ESTA DECLARADO PARA VISIBILIDAD DE SERVICIOS
          $VerSeccion = VerSeccion::find(2);
          $VerSeccion->Ver = $opcion;
          $VerSeccion->save();
          return $VerSeccion;
        }
      }
       // EL ID 2 ESTA DECLARADO PARA VISIBILIDAD DE SERVICIOS
      $VerSeccion = VerSeccion::find(2);
      $VerSeccion->Ver = $opcion;
      $VerSeccion->save();
      return $VerSeccion;
     
    }

    /**
     * actuliza si la visiblidad de la seunda seccion en cliente(nosotros)
     */
    public function updateVisibilidadSegundaSeccion($opcion){
      $_ID = 1; // EL ID  ESTA DECLARADO PARA VISIBILIDAD DE LA SEGUNDA SECCION
      $VerSeccion = VerSeccion::find($_ID);
      $VerSeccion->Ver = $opcion;
      $VerSeccion->save();
      return $VerSeccion;
    }
    

    public function numeroDeServicios()
    {
      $ServiciosSeleccionado = ServiciosSeleccionado::all();
      return count($ServiciosSeleccionado);
      
    }
}