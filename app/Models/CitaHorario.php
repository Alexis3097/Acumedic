<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
class CitaHorario extends Pivot
{
    protected $table = 'CitaHorario';
    protected $fillable = [
        'IdCita','IdHorario',
    ];
}
