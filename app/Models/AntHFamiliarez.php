<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
class AntHFamiliarez extends Model
{
    protected $table = 'AntHFamiliarez';
    protected $fillable = [
        'IdPaciente','Diabetes','Hipertension','EnfToriodeas','Otros',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
