<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Carbon\Carbon;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'IdSexo','name', 'ApellidoPaterno', 'ApellidoMaterno','FechaNacimiento','Telefono', 'email','Foto', 'FotoId','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNombreCompletoAttribute()
    {
        return "{$this->name} {$this->ApellidoPaterno} {$this->ApellidoMaterno}";
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
}
