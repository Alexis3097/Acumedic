<?php

namespace App\Models;

use App\Models\fotoProducto;
use App\Models\almacen;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'Nombre','PrecioCompra','PrecioPublico','Estrellas','DescripcionCorta','DescripcionLarga','CodigoBarra',
    ];

    public function fotoProductos()
    {
        return $this->hasMany(fotoProducto::class,'IdProducto');
    }

    public function almacen()
    {
        return $this->hasOne(almacen::class);
    }
}
