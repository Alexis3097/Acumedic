<?php

namespace App\Models;

use App\Models\EstatusSolicitud;
use Illuminate\Database\Eloquent\Model;

class SolicitudCitas extends Model
{
    protected $table = 'SolicitudCitas';
    protected $fillable = [
        'IdEstatusSolicitud','NombreCompleto','Correo','Ciudad','Telefono',
    ];

    public function estatusSolicitud()
    {
        return $this->belongsTo(EstatusSolicitud::class,'IdEstatusSolicitud');
    }
}
