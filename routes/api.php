<?php

use App\Http\Controllers\Api\V1\RematesController;
use App\Http\Controllers\Api\V1\ProductosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('V1')->group(function () {
    Route::resource('rematesApi', RematesController::class)->only(['index', 'show']);
    Route::resource('productosApi', ProductosController::class)->only(['index', 'show']);
    Route::get('/remates/all/{id}', [RematesController::class, 'showAll'])->name('remates.showAll');
    Route::get('/productos/all/{id}',[ ProductosController::class, 'showAll'])->name('productos.showAll');
    Route::get('/rematesWinners', [RematesController::class, 'showWinners'])->name('remates.showWinners');
    Route::get('/productos/cantidadOfertas/{id_producto}', [ProductosController::class, 'cantidadOfertas'])->name('productos.cantidadOfertas');
});
   
