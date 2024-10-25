<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
        'id_usuario',
        'producto',
        'id_remate',
        'nombre_completo',
        'pais',
        'provincia',
        'estado',
        'ciudad',
        'dni',
        'cuil',
        'metodo_pago',
        'telefono',
        'direccion',
        'codigo_postal',
    ];

    protected $primaryKey = 'id_oferta';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class,  'producto');
    }

    public function remate()
    {
        return $this->belongsTo(Remate::class, 'id_remate');
    }
}
