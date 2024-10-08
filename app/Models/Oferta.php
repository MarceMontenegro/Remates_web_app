<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    use HasFactory;

    protected $fillable = [
        'monto',
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
