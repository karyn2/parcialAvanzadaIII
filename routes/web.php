<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarcasController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ArticuloController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/DelgadoCeron/marcas', [MarcasController::class, 'index'])->name('angela_victor_marcas');

Route::get('/DelgadoCeron/presentacion', [TiendaController::class, 'index'])->name('angela_victor_tienda');

Route::get('/DelgadoCeron/articulos', [ArticuloController::class, 'index'])->name('angela_victor_articulos');
