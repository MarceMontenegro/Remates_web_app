<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Remate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($remate_id)
    {
        $remate = Remate::findOrFail($remate_id);
        $productos = Producto::withCount('ofertas')->where('id_remate', $remate_id)->get();
    
        return view('productos.index', compact('remate', 'productos'));
    }
    

    

    /**
     * Show the form for creating a new resource.
     */
    public function create($remate_id)
    {
        $remate = Remate::findOrFail($remate_id); // Obtener el remate por ID
        return view('productos.create', compact('remate')); // Pasar el objeto remate a la vista
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $remate_id)
    {
        // Validación de los campos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio_base' => 'required|numeric', // Asegúrate de usar el nombre correcto para el campo de precio
            'imagen_URL' => 'nullable|image|mimes:jpeg,png,jpg,gif', // Validación de la imagen
        ]);
    
        // Crear una nueva instancia de Producto
        $producto = new Producto();
        $producto->id_remate = $remate_id;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio_base = $request->precio_base;
        $producto->estado = 0; // Estado pendiente de aprobación
        $producto->fecha_de_solicitud = now(); // Establece la fecha de solicitud actual
        $producto->id_usuario = Auth::user()->id; // ID del usuario que está publicando el producto
    
        // Si el usuario sube una imagen, guárdala
        if ($request->hasFile('imagen_URL')) {
            // Almacena la imagen en storage/app/public/productos
            $imagenPath = $request->file('imagen_URL')->store('productos', 'public'); 
            // Guarda solo la ruta relativa a la carpeta 'public'
            $producto->imagen_URL = $imagenPath;
        }
        
        
    
        // Guardar el producto en la base de datos
        
        $producto->save();
        
        // Redirigir al usuario con un mensaje de éxito
        return redirect()->route('admin.remate.index')->with('success', 'Producto enviado para aprobación.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id); // Obtén el producto por su ID
        return view('productos.show', compact('producto'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}