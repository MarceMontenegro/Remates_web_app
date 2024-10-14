<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remate extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'estado',
    ];

    protected $primaryKey = 'id_remates';

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_remate');
    }
    public function ofertas()
    {
        return $this->hasManyThrough(Oferta::class, Producto::class, 'id_remate', 'producto', 'id_remates', 'id_producto');
    }
}
