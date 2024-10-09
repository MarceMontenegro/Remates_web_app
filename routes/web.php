<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::middleware('auth')->group(function () {
Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/crear-remate', [App\Http\Controllers\RemateController::class, 'create'])->name('admin.remate.create');
Route::post('/crear-remate/create', [App\Http\Controllers\RemateController::class, 'store'])->name('admin.remate.store');
Route::get('/remates', [App\Http\Controllers\RemateController::class, 'index'])->name('admin.remate.index');
Route::get('/remates/{remate}', [App\Http\Controllers\RemateController::class, 'show'])->name('admin.remate.show');
Route::get('/remates/{remate}/edit', [App\Http\Controllers\RemateController::class, 'edit'])->name('admin.remate.edit');
Route::put('/remates/{remate}/update', [App\Http\Controllers\RemateController::class, 'update'])->name('admin.remate.update'); // Actualizar remate
Route::delete('/remates/{remate}', [App\Http\Controllers\RemateController::class, 'destroy'])->name('admin.remate.destroy');
Route::get('/remates/{remate_id}/productos/create', [App\Http\Controllers\ProductoController::class, 'create'])->name('productos.create');
Route::post('/remates/{remate_id}/productos', [App\Http\Controllers\ProductoController::class, 'store'])->name('productos.store');
Route::get('/admin/solicitudes', [App\Http\Controllers\AdminController::class, 'mostrarSolicitudes'])->name('admin.dashboard');
Route::put('/admin/producto/{id_producto}/aceptar', [App\Http\Controllers\AdminController::class, 'aceptarProducto'])->name('admin.producto.aceptar');
Route::put('/admin/producto/{id_producto}/rechazar', [App\Http\Controllers\AdminController::class, 'rechazarProducto'])->name('admin.producto.rechazar');




});