<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    protected $table = 'Pacientes';
    use SoftDeletes;
    protected $fillable = [
        'Nombre','ApellidoPaterno','ApellidoMaterno','Edad','Telefono', 
    ];
}
