<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        // Obtiene el producto por su ID
        $producto = Producto::findOrFail($id);

        // Devuelve la vista del formulario de oferta, pasando el producto
        return view('ofertas.create', compact('producto'));
    }

    /**
     * Store a newly created resource in storage.
     */
 
     public function store(Request $request, $id_producto)
     {
         $request->validate([
             'monto' => 'required|numeric|min:0',
             'nombre_completo' => 'required|string|max:255',
             'pais' => 'required|string|max:255',
             'provincia' => 'required|string|max:255',
             'ciudad' => 'required|string|max:255',
             'numero_identidad' => 'required|string|max:20',
             'cuil' => 'required|string|max:20',
             'metodo_pago' => 'required|string|max:20',
             'numero_telefono' => 'required|string|max:20',
             'direccion' => 'required|string|max:255',
             'codigo_postal' => 'required|string|max:10',
             'id_remate' => 'required|exists:remates,id_remates',
         ]);
     
         Oferta::create([
             'monto' => $request->input('monto'),
             'id_usuario' => Auth::id(),
             'producto' => $id_producto,
             'id_remate' => $request->input('id_remate'),
             'nombre_completo' => $request->input('nombre_completo'),
             'pais' => $request->input('pais'),
             'provincia' => $request->input('provincia'),
             'ciudad' => $request->input('ciudad'),
             'dni' => $request->input('numero_identidad'),
             'cuil' => $request->input('cuil'),
             'metodo_pago' => $request->input('metodo_pago'),
             'telefono' => $request->input('numero_telefono'),
             'direccion' => $request->input('direccion'),
             'codigo_postal' => $request->input('codigo_postal'),
         ]);
     
         return redirect()->route('admin.remate.index')->with('success', 'Oferta creada con éxito.');
     }
     
     
    /**
     * Display the specified resource.
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
