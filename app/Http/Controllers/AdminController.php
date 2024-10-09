<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    public function mostrarSolicitudes()
    {
    if (Auth::user()->id != 1) {
        return redirect('/')->with('error', 'No tienes permisos para acceder a esta página.');
    }

    // Mostrar las notificaciones al administrador
    $solicitudes = Producto::where('estado', 0)->with('remate')->get();// Productos esperando aprobación
    return view('admin.dashboard', compact('solicitudes'));
    }
    public function aceptarProducto($id_producto)
    {
        $producto = Producto::findOrFail($id_producto);
        $producto->estado = 1; // Aprobado
        $producto->save();
    
        return redirect()->route('admin.dashboard')->with('success', 'Producto aprobado.');
    }

    public function rechazarProducto($id_producto)
    {
        $producto = Producto::findOrFail($id_producto);
        $producto->estado = 2; // Rechazado
        $producto->save();
    
        return redirect()->route('admin.dashboard')->with('success', 'Producto rechazado.');
    }

}