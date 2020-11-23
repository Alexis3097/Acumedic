<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
class AntPatologico extends Model
{
    protected $table = 'AntPatologico';
    protected $fillable = [
        'IdPaciente','Hospitalarios','Cirugias','EnfermedadesCardiacas','Transfusiones','Cancer',
        'Traumatismo','Otros',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
