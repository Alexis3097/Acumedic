<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Sexo;
use App\Models\Cita;
class Paciente extends Model
{
    
    use SoftDeletes;
    protected $table = 'Paciente';
    protected $fillable = [
        'IdSexo','Nombre','ApellidoPaterno','ApellidoMaterno','FechaNacimiento','Telefono', 'Foto','LugarOrigen','Correo','TipoSangre',
    ];

    public function sexo()
    {
        return $this->hasOne(Sexo::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class,'IdPaciente');
    }

    public function getNombreCompletoAttribute()
    {
        return "{$this->Nombre} {$this->ApellidoPaterno} {$this->ApellidoMaterno}";
    }
}
