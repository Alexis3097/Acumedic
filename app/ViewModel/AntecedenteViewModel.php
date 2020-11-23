<?php

namespace App\ViewModel;
use App\Models\AntGinecologico;
use App\Models\AntHFamiliarez;
use App\Models\AntNoPatologico;
use App\Models\AntPatologico;

class AntecedenteViewModel
{
    public function create($antecedenteData)
    {
        //vamos guardando en cada tabla 
        $patologico = new AntPatologico;
        $patologico->IdPaciente = $antecedenteData->IdPaciente;
        $patologico->Hospitalarios = $antecedenteData->Hospitalarios;
        $patologico->Cirugias = $antecedenteData->Cirugias;
        $patologico->EnfermedadesCardiacas = $antecedenteData->EnfermedadesCardiacas;
        $patologico->Transfusiones = $antecedenteData->Transfusiones;
        $patologico->Cancer = $antecedenteData->Cancer;
        $patologico->Traumatismo = $antecedenteData->Traumatismo;
        $patologico->Otros = $antecedenteData->OtrosPat;
        $patologico->save();

        $noPat = new AntNoPatologico;
        $noPat->IdPaciente = $antecedenteData->IdPaciente;
        $noPat->ActividadFisica = $antecedenteData->ActividadFisica;
        $noPat->Tabaquismo = $antecedenteData->Tabaquismo;
        $noPat->Alcoholismo = $antecedenteData->Alcoholismo;
        $noPat->SustanciasODrogas = $antecedenteData->SustanciasODrogas;
        $noPat->VacunasRecientes = $antecedenteData->VacunasRecientes;
        $noPat->Otros = $antecedenteData->OtrosNoPat;
        $noPat->save();

        $ginecologico = new AntGinecologico;
        $ginecologico->IdPaciente = $antecedenteData->IdPaciente;
        $ginecologico->FechaPrimeraMenstruacion = $antecedenteData->FechaPrimeraMenstruacion;
        $ginecologico->FechaUltimaMenstruacion = $antecedenteData->FechaUltimaMenstruacion;
        $ginecologico->CaractMenstruacion = $antecedenteData->CaractMenstruacion;
        $ginecologico->Embarazos = $antecedenteData->Embarazos;
        $ginecologico->CancerCervico = $antecedenteData->CancerCervico;
        $ginecologico->CancerUterino = $antecedenteData->CancerUterino;
        $ginecologico->Otros = $antecedenteData->OtrosGine;
        $ginecologico->save();

        $HFamiliarez = new AntHFamiliarez;
        $HFamiliarez->IdPaciente = $antecedenteData->IdPaciente;
        $HFamiliarez->Diabetes = $antecedenteData->Diabetes;
        $HFamiliarez->hipertension = $antecedenteData->hipertension;
        $HFamiliarez->EnfTiroideas = $antecedenteData->EnfTiroideas;
        $HFamiliarez->Otros = $antecedenteData->OtrosFam;
        $HFamiliarez->save();

        return $antecedenteData;

    }

    public function getAntPatologico($IdPaciente) 
    {
        $antePatologico = AntPatologico::where('IdPaciente',$IdPaciente)->first();
        return $antePatologico;
    }
    
    public function getAntNoPatologico($IdPaciente) 
    {
        $anteNoPatologico = AntNoPatologico::where('IdPaciente',$IdPaciente)->first();
        return $anteNoPatologico;
    }

    public function getAntGinecologico($IdPaciente) 
    {
        $antGinecologico = AntGinecologico::where('IdPaciente',$IdPaciente)->first();
        return $antGinecologico;
    }

    public function getAntHFamiliarez($IdPaciente) 
    {
        $antHFamiliarez = AntHFamiliarez::where('IdPaciente',$IdPaciente)->first();
        return $antHFamiliarez;
    }
}