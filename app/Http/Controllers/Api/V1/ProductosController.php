<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Oferta;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::all();
        return response()->json($productos);
    }

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = producto::find($id);
        return response()->json($producto);
    }
    public function showAll($id)
    {
        $producto = Producto::with('remate')->find($id);
        
        return response()->json($producto);
    }

    public function cantidadOfertas($id_producto){
        $ofertas = Oferta::where('producto', $id_producto)->count();
        return response()->json($ofertas);
    }

}
