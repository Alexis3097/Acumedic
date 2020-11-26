<?php

namespace App\ViewModel;
use App\Models\AntGinecologico;
use App\Models\AntHFamiliarez;
use App\Models\AntNoPatologico;
use App\Models\AntPatologico;

class AntecedenteViewModel
{
    public function guardarPatologico($antecedenteData){
        $data = $antecedenteData->except('_token');
        $patologico = AntPatologico::create($data);
        return $patologico;
    }

    public function guardarNoPatologico($antecedenteData){
        $data = $antecedenteData->except('_token');
        $noPatologico = AntNoPatologico::create($data);
        return $noPatologico;
    }

    public function guardarGinecologico($antecedenteData){
        $data = $antecedenteData->except('_token');
        $ginecologico = AntGinecologico::create($data);
        return $ginecologico;
    }

    public function guardarFamiliares($antecedenteData){
        $data = $antecedenteData->except('_token');
        $familiares = AntHFamiliarez::create($data);
        return $familiares;
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

    public function actualizarPatologico($antecedenteData)
    {
        $antePatologico = AntPatologico::find($antecedenteData->Id);
        $antePatologico->Hospitalarios = $antecedenteData->Hospitalarios;
        $antePatologico->Cirugias = $antecedenteData->Cirugias;
        $antePatologico->EnfermedadesCardiacas = $antecedenteData->EnfermedadesCardiacas;
        $antePatologico->Transfusiones = $antecedenteData->Transfusiones;
        $antePatologico->Cancer = $antecedenteData->Cancer;
        $antePatologico->Traumatismo = $antecedenteData->Traumatismo;
        $antePatologico->Otros = $antecedenteData->Otros;
        $antePatologico->save();
        return $antePatologico;
        
    }

    public function actualizarNoPatologico($antecedenteData)
    {
        $anteNoPatologico = AntNoPatologico::find($antecedenteData->Id);
        $anteNoPatologico->ActividadFisica = $antecedenteData->ActividadFisica;
        $anteNoPatologico->Tabaquismo = $antecedenteData->Tabaquismo;
        $anteNoPatologico->Alcoholismo = $antecedenteData->Alcoholismo;
        $anteNoPatologico->SustanciasODrogas = $antecedenteData->SustanciasODrogas;
        $anteNoPatologico->VacunasRecientes = $antecedenteData->VacunasRecientes;
        $anteNoPatologico->Otros = $antecedenteData->Otros;
        $anteNoPatologico->save();
        return $anteNoPatologico;
        
    }

    public function actualizarGinecologico($antecedenteData)
    {
        $anteGinecologico = AntGinecologico::find($antecedenteData->Id);
        $anteGinecologico->FechaPrimeraMenstruacion = $antecedenteData->FechaPrimeraMenstruacion;
        $anteGinecologico->FechaUltimaMenstruacion = $antecedenteData->FechaUltimaMenstruacion;
        $anteGinecologico->CaractMenstruacion = $antecedenteData->CaractMenstruacion;
        $anteGinecologico->Embarazos = $antecedenteData->Embarazos;
        $anteGinecologico->CancerCervico = $antecedenteData->CancerCervico;
        $anteGinecologico->CancerUterino = $antecedenteData->CancerUterino;
        $anteGinecologico->Otros = $antecedenteData->Otros;
        $anteGinecologico->save();
        return $anteGinecologico;
        
    }

    public function actualizarFamiliares($antecedenteData)
    {
        $anteFamiliares = AntHFamiliarez::find($antecedenteData->Id);
        $anteFamiliares->Diabetes = $antecedenteData->Diabetes;
        $anteFamiliares->Hipertension = $antecedenteData->Hipertension;
        $anteFamiliares->EnfTiroideas = $antecedenteData->EnfTiroideas;
        $anteFamiliares->Otros = $antecedenteData->Otros;
        $anteFamiliares->save();
        return $anteFamiliares;
        
    }
}