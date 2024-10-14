<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'id_usuario', // Agregar id_usuario para que sea rellenable
        'producto', // Agregar producto para que sea rellenable
        'id_remate', // Agregar id_remate para que sea rellenable
    ];

    protected $primaryKey = 'id_ofertas';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto');
    }

    public function remate()
    {
        return $this->belongsTo(Remate::class, 'id_remate');
    }
}
