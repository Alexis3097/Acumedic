<?php

namespace App\ViewModel;
use App\Models\FotoAntecedente;
class EstudioGabineteViewModel
{
    public function getFotos($IdPaciente){
        $fotos = FotoAntecedente::where('IdPaciente',$IdPaciente)->orderBy('id','desc')->get();
        return $fotos;
    }

    public function create($data){
        $antecedenteGabinete = $data->except('_token');
        if($archivo = $data->file('Url'))
        {
          $nombre = time().'.'.$archivo->getClientOriginalExtension();
          $archivo->move('uploads', $nombre);
          $antecedenteGabinete['Url']  = $nombre;
        }
        return FotoAntecedente::create($antecedenteGabinete);
    }

    public function delete($IdEstudio){
        $foto = FotoAntecedente::find($IdEstudio);
        $rutaImagen = public_path().'/uploads/'.$foto->Url;
        if (@getimagesize($rutaImagen)){
              unlink($rutaImagen);
        }
        $foto->delete();
        return $foto;
    }
}