<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::middleware('auth')->group(function () {
Route::get('/', function () {
        return view('welcome');
    });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/crear-remate', [App\Http\Controllers\RemateController::class, 'create'])->name('admin.remate.create');
Route::post('/crear-remate/create', [App\Http\Controllers\RemateController::class, 'store'])->name('admin.remate.store');
Route::get('/remates', [App\Http\Controllers\RemateController::class, 'index'])->name('admin.remate.index');
Route::get('/remates/{remate}', [App\Http\Controllers\RemateController::class, 'show'])->name('admin.remate.show');
Route::get('/remates/{remate}/edit', [App\Http\Controllers\RemateController::class, 'edit'])->name('admin.remate.edit');
Route::put('/remates/{remate}/update', [App\Http\Controllers\RemateController::class, 'update'])->name('admin.remate.update'); // Actualizar remate
Route::delete('/remates/{remate}', [App\Http\Controllers\RemateController::class, 'destroy'])->name('admin.remate.destroy');

});