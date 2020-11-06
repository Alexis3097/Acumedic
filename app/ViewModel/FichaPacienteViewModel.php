<?php

namespace App\ViewModel;
use App\Models\FichaPaciente;
class FichaPacienteViewModel
{

    public static function create($fichaData)
    {
        $fichaPaciente = $fichaData->except('_token');
        return FichaPaciente::create($fichaPaciente);
    }
    public static function getFichasXPaciente($IdPaciente)
    {
        $fichas = FichaPaciente::where('IdPaciente','=',$IdPaciente)->get();
        return $fichas;
        
    }
    public static function getFichaXPaciente($IdFicha)
    {
        $fichas = FichaPaciente::where('IdPaciente','=',$IdFicha)->first();
        return $fichas;
        
    }

    public static function update($fichaData, $id)
    {
        $ficha = FichaPaciente::find($id);
        $ficha->LugarResidencia = $fichaData->LugarResidencia;
        $ficha->Direccion = $fichaData->Direccion;
        $ficha->Peso = $fichaData->Peso;
        $ficha->Talla = $fichaData->Talla;
        $ficha->SPO2 = $fichaData->SPO2;
        $ficha->FC = $fichaData->FC;
        $ficha->FR = $fichaData->FR;
        $ficha->TA = $fichaData->TA;
        $ficha->Dextrosis = $fichaData->Dextrosis;  
        $ficha->save(); 

        return $ficha;
    }
}