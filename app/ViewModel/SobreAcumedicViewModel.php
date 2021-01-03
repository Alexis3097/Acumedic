<?php

namespace App\ViewModel;
use App\Models\Contacto;
use App\Models\Informacion;
use App\Models\SobreAcumedic;
use App\Models\ServiciosSeleccionado;

class SobreAcumedicViewModel
{
    public function datosPrimeraSeccion(){
        return  SobreAcumedic::first();
    }

    public function updateDescripcion($id, $data){
        $sobreAcumedic = SobreAcumedic::find($id);
        if($archivo = $data->file('Foto'))
        {
            if(!is_null($sobreAcumedic->Foto)){
            $rutaImagen = public_path().'/uploads/SobreAcumedic/'.$sobreAcumedic->Foto;
                if (@getimagesize($rutaImagen)){
                    unlink($rutaImagen);
                }
            }
            $nombre = time().'.'.$archivo->getClientOriginalExtension();
            $archivo->move('uploads/SobreAcumedic', $nombre);
            $sobreAcumedic->Foto = $nombre;
        }
        $sobreAcumedic->Titulo1 = $data->Titulo1;
        $sobreAcumedic->Informacion1 = $data->Informacion1;
        $sobreAcumedic->Titulo2 = $data->Titulo2;
        $sobreAcumedic->Informacion2 = $data->Informacion2;
        $sobreAcumedic->Titulo3 = $data->Titulo3;
        $sobreAcumedic->Informacion3 = $data->Informacion3;
        $sobreAcumedic->TituloImagen = $data->TituloImagen;
        $sobreAcumedic->TextoAlterno = $data->TextoAlterno;
        $sobreAcumedic->save();
        return $sobreAcumedic;
    }

    public function updateSegundaSeccion($id, $data){
        $sobreAcumedic = Informacion::find($id);
        if($archivo = $data->file('Foto'))
        {
            if(!is_null($sobreAcumedic->Foto)){
            $rutaImagen = public_path().'/uploads/SobreAcumedic/'.$sobreAcumedic->Foto;
                if (@getimagesize($rutaImagen)){
                    unlink($rutaImagen);
                }
            }
            $nombre = time().'.'.$archivo->getClientOriginalExtension();
            $archivo->move('uploads/SobreAcumedic', $nombre);
            $sobreAcumedic->Foto = $nombre;
        }
        $sobreAcumedic->Titulo1 = $data->Titulo1;
        $sobreAcumedic->Informacion1 = $data->Informacion1;
        $sobreAcumedic->Titulo2 = $data->Titulo2;
        $sobreAcumedic->Informacion2 = $data->Informacion2;
        $sobreAcumedic->TituloImagen = $data->TituloImagen;
        $sobreAcumedic->TextoAlterno = $data->TextoAlterno;
        $sobreAcumedic->save();
        return $sobreAcumedic;
    }

    public function datosSegundaSeccion(){
        return  Informacion::first();
    }

    public function contacto(){
        return  Contacto::first();
    }

    public function updateContacto($id, $data){
        $contacto = Contacto::find($id);
        $contacto->Telefono = $data->Telefono;
        $contacto->Horario = $data->Horario;
        $contacto->save();
        return $contacto;
    }

    public function agregarServicios($data){
        $ServiciosSeleccionado = ServiciosSeleccionado::all();
        foreach ($ServiciosSeleccionado as $selected){
            $selected->delete();
        }
      
        foreach ($data as $key => $value){
            $ServiciosSeleccionado = new ServiciosSeleccionado;
            $ServiciosSeleccionado->IdServicio = $value;
            $ServiciosSeleccionado->save();
        }
        return;
    }

    
}