<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Paciente;
use App\Models\SintomaSubjetivo;
class Consulta extends Model
{
    use SoftDeletes;
    protected $table = 'Consulta';
    protected $fillable = [
        'IdPaciente','Motivo',
    ];

    public function paciente()
    {
        return $this->hasOne(Paciente::class);
    }

    public function SintomaSubjetivo()
    {
        return $this->belongsTo(SintomaSubjetivo::class);
    }
}
