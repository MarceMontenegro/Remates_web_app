<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;



    protected $primaryKey = 'id_producto';
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio_base',
        'estado',
        'fecha_de_solicitud',
        'imagen_URL',
        
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function remate()
    {
        return $this->belongsTo(Remate::class, 'id_remate');
    }
}
