<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;

class fotoProducto extends Model
{
    protected $table = 'fotoProductos';
    protected $fillable = [
        'IdProducto','Nombre','fotoId','Titulo','TextoAlterno',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'IdProducto');
    }
}
