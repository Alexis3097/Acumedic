<?php

namespace App\Models;
use App\Models\Cita;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $fillable = [
        'Horario',
    ];
    
    public function citas()
    {
        return $this->belongsToMany(Cita::class, 'CitaHorario','IdHorario','IdCita')
                        ->as('CitaHorario')
                        ->withTimestamps();
    }
}
