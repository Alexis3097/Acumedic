<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
class AntNoPatologico extends Model
{
    protected $table = 'AntNoPatologico';
    protected $fillable = [
        'IdPaciente','ActividadFisica','Tabaquismo','Alcoholismo','SustanciasODrogas','VacunasRecientes','Otros',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
