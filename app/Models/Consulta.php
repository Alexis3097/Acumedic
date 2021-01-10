<?php

namespace App\Models;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\SintomaSubjetivo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consulta extends Model
{
    use SoftDeletes;
    protected $table = 'Consulta';
    protected $fillable = [
        'IdPaciente','IdCita','Motivo',
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function SintomaSubjetivo()
    {
        return $this->belongsTo(SintomaSubjetivo::class);
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class,'IdCita');
    }
}
