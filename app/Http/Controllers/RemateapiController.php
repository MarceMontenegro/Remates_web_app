<?php

use App\Http\Controllers\Controller;
use App\Models\Remate;
use Illuminate\Http\Request;

class RemateController extends Controller
{
    // Obtener todos los remates pendientes
    public function index()
    {
        return Remate::all();
    }

    // Crear un nuevo remate
    public function store(Request $request)
    {
        $remate = Remate::create($request->all());
        return response()->json($remate, 201);
    }

    // Actualizar un remate
    public function update(Request $request, $id)
    {
        $remate = Remate::find($id);
        $remate->update($request->all());
        return response()->json($remate, 200);
    }

    // Borrar un remate
    public function destroy($id)
    {
        Remate::destroy($id);
        return response()->json(null, 204);
    }
}
