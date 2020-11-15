<?php

namespace App\ViewModel;
use App\Models\FotoAntecedente;
class EstudioGabineteViewModel
{
    public function getFotos($IdPaciente){
        $fotos = FotoAntecedente::where('IdPaciente',$IdPaciente)->get();
        return $fotos;
    }
}