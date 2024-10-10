<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RemateController;
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
Route::get('/home', [HomeController::class, 'index']);
Route::get('/crear-remate', [App\Http\Controllers\RemateController::class, 'create'])->name('admin.remate.create');
Route::post('/crear-remate/create', [RemateController::class, 'store'])->name('admin.remate.store');
Route::get('/remates', [RemateController::class, 'index'])->name('admin.remate.index');
Route::get('/remates/{remate}', [RemateController::class, 'show'])->name('admin.remate.show');
Route::get('/remates/{remate}/edit', [RemateController::class, 'edit'])->name('admin.remate.edit');
Route::put('/remates/{remate}/update', [RemateController::class, 'update'])->name('admin.remate.update'); // Actualizar remate
Route::delete('/remates/{remate}', [RemateController::class, 'destroy'])->name('admin.remate.destroy');
Route::get('/remates/{remate_id}/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/remates/{remate_id}/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::get('/admin/solicitudes', [AdminController::class, 'mostrarSolicitudes'])->name('admin.dashboard');
Route::put('/admin/producto/{id_producto}/aceptar', [AdminController::class, 'aceptarProducto'])->name('admin.producto.aceptar');
Route::put('/admin/producto/{id_producto}/rechazar', [AdminController::class, 'rechazarProducto'])->name('admin.producto.rechazar');

Route::view('/centro-de-ayuda', 'centro_ayuda')->name('welcome.help');
Route::get('/sobre-nosotros', function () {
    return view('info');
});
Route::get('/centro-ayuda', function () {
    return view('help');
});

});