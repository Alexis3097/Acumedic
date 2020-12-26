<?php

namespace App\ViewModel;
use App\Models\Servicio;
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

    public function buscarServicios($nombre){
      $servicio = Servicio::where('Nombre', 'like','%' . $nombre. '%')
                  ->get();
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
}