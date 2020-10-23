<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cita;
class EstatusConsulta extends Model
{
    protected $table = 'EstatusConsulta';
    protected $fillable = [
        'Nombre','Descripcion',
    ];

    public function citas()
    {
        return $this->hasMany(Cita::class,'IdEstatusConsulta');
    }
}
