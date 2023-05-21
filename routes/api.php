<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\CarritoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/mesa/prueba', 'MesaController@prueba');
Route::get('/cargar-productos/{id}/{token?}', [MesaController::class, 'cargarProductosConStock']);

Route::post('/pedirListaProductosPorId/{token}', [CarritoController::class, 'pedirListaProductosPorId']);

Route::get('/pagarCarrito/{token}', [CarritoController::class, 'pagarCarrito']);

Route::get('/devolverProductosPedidosNoPagados/{token}', [CarritoController::class, 'devolverProductosPedidosNoPagados']);

Route::get('/admObtenerTodasMesas/{token}', [MesaController::class, 'admObtenerTodasMesas']);

Route::get('/admObtenerToken/{id}/{token?}', [MesaController::class, 'admObtenerToken']);

Route::get('/admComprobarProductosPorMesa/{token}/{idMesa}', [CarritoController::class, 'admComprobarProductosPorMesa']);



