<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Sexo;
use App\Models\CitaHorario;
use App\Models\Cita;
use App\Models\AntGinecologico;
use App\Models\AntHFamiliarez;
use App\Models\AntNoPatologico;
use App\Models\AntPatologico;
use Cloudinary\Cloudinary;
use Carbon\Carbon;
class Paciente extends Model
{

    use SoftDeletes;
    protected $table = 'Paciente';
    protected $fillable = [
        'IdSexo','Nombre','ApellidoPaterno','ApellidoMaterno','FechaNacimiento','Telefono', 'Foto','FotoId','LugarOrigen','Correo','TipoSangre',
    ];

    public function sexo()
    {
        return $this->hasOne(Sexo::class);
    }

    public function antGinecologico()
    {
        return $this->hasOne(AntGinecologico::class);
    }

    public function antHFamiliarez()
    {
        return $this->hasOne(AntHFamiliarez::class);
    }

    public function antNoPatologico()
    {
        return $this->hasOne(AntNoPatologico::class);
    }

    public function antPatologico()
    {
        return $this->hasOne(AntPatologico::class);
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
