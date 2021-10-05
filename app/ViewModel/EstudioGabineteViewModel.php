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
        if(!is_null($data->file('Url'))){

            $foto = cloudinary()->upload($data->file('Url')->getRealPath());
            $antecedenteGabinete['Url']  = $foto->getSecurePath();
            $antecedenteGabinete['UrlId']  =  $foto->getPublicId();
        }
        return FotoAntecedente::create($antecedenteGabinete);
    }

    public function delete($IdEstudio){
        $foto = FotoAntecedente::find($IdEstudio);
        if(!is_null($foto)){
            cloudinary()->destroy($foto->UrlId);
        }
        $foto->delete();
        return $foto;
    }
}
