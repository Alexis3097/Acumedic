<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Sexo;
use App\Models\Cita;
use Carbon\Carbon;
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
    
    public function getEdadAttribute()
    {
        if(is_null($this->FechaNacimiento))
        {
            return 0;
        }
        $fechaSplit = explode("-", $this->FechaNacimiento);
        return Carbon::createFromDate($fechaSplit[0], $fechaSplit[1], $fechaSplit[2])->age;
    }
    public function getFechaCarbonAttribute()
    {
        return Carbon::now();
    }
}
