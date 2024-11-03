<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Remate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RemateController extends Controller
{
    /**
     * Display a listing of the resource.
      */
//     public function index(Request $request)
// {
//     // Obtén el estado del request (1 para Activos, 0 para Pendientes, 2 para Finalizados)
//     $estado = $request->input('estado');

//     if ($estado !== null) {
//         $remates = Remate::where('estado', $estado)->get(); // Filtra según el estado
//     } else {
//         $remates = Remate::all(); // Si no hay estado, trae todos los remates
//     }

//     return view('admin.remates.index', compact('remates'));
// }
    public function index(Request $request)
    {
        $estado = $request->input('estado');
        $remates = Remate::with(['ofertas' => function($query) {
            $query->orderBy('monto', 'desc'); // Ordenar por el monto de forma descendente
        }])
        ->when($estado, function($query, $estado) {
            return $query->where('estado', $estado);
        })
        ->get();

        return view('admin.remates.index', compact('remates'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::user()->id != 1) {
            return redirect('/')->with('error', 'No tienes permisos para acceder a esta página.');
        }
        return view('admin.remates.create');
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request->validate([
            'nombre' => 'required|string|max:20',
            'descripcion' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        $remate = new Remate();
        $remate->nombre = $request->nombre;
        $remate->descripcion = $request->descripcion;
        $remate->fecha_inicio = $request->fecha_inicio;
        $remate->fecha_fin = $request->fecha_fin;
        $remate->estado = 0; // Estado pendiente
        $remate->save();

        return redirect()->route('admin.remate.index')->with('success', 'Remate creado exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Remate $remate)
    {
        
        return view('admin.remates.show', compact('remate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Remate $remate)
    {
        return view('admin.remates.edit', compact('remate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);

        $remate = Remate::findOrFail($id);
        $remate->nombre = $request->input('nombre');
        $remate->descripcion = $request->input('descripcion');
        $remate->fecha_inicio = $request->input('fecha_inicio');
        $remate->fecha_fin = $request->input('fecha_fin');
        $remate->save();

        return redirect()->route('admin.remate.index')->with('success', 'Remate actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Remate $remate)
    {
        $remate->delete();
        return redirect()->route('admin.remate.index')->with('success', 'Remate eliminado exitosamente');
    }
}
