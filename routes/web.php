<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('productos/pdf', [\App\Http\Controllers\ProductoController::class, 'pdf'])->name('productos.pdf');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('marcas',\App\Http\Controllers\MarcaController::class);
Route::resource('categorias',\App\Http\Controllers\CategoriaController::class);
Route::resource('productos',\App\Http\Controllers\ProductoController::class);
Route::resource('proveedores',\App\Http\Controllers\ProveedoreController::class);
Route::resource('compras',\App\Http\Controllers\CompraController::class);
