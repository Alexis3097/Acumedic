<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
class Inventario extends Model
{
    protected $table = 'Inventario';
    protected $fillable = [
        'producto_id','Cantidad','StockMinimo',
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
