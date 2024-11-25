<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Remate;
use Illuminate\Http\Request;

class RematesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $remates = Remate::all();
        return response()->json($remates);
    }

   

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $remate = Remate::find($id);
        return response()->json($remate);
    }

    public function showAll($id)
    {
        $remate = Remate::with('productos')->find($id);
        return response()->json($remate);
    }


    public function showWinners(Request $request)
    {
        // Consulta los remates con estado = 2 y sus ofertas ordenadas por monto
        $remates = Remate::with(['productos.ofertas' => function ($query) {
            $query->orderBy('monto', 'desc'); // Ordenar por el monto en forma descendente
        }])
        ->where('estado', 2) // Filtrar solo remates con estado = 2
        ->get();
    
        // Reestructura los datos para obtener el ganador de cada producto
        $data = $remates->map(function ($remate) {
            return [
                'remate_id' => $remate->id_remates,
                'nombre' => $remate->nombre,
                'productos' => $remate->productos->map(function ($producto) {
                    $ganador = $producto->ofertas->first(); // Oferta más alta
                    return [
                        'producto_id' => $producto->id_producto,
                        'nombre_producto' => $producto->nombre,
                        'ganador' => $ganador ? [
                            'usuario_id' => $ganador->id_usuario,
                            'nombre' => $ganador->usuario->name,
                            'monto' => $ganador->monto,
                        ] : null,
                    ];
                }),
            ];
        });
    
        // Retorna la respuesta en JSON
        return response()->json($data);
    }

}
