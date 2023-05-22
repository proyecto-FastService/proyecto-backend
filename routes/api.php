<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;
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

Route::get('/llamarCamarero/{id}', [MesaController::class, 'llamarCamarero']);



Route::post('/admLiberarMesa/{token}/{idMesa}', [MesaController::class, 'admLiberarMesa']);

Route::post('/admReservarMesa/{token}/{idMesa}', [MesaController::class, 'admReservarMesa']);

Route::post('/admComprobarProductosPorMesa/{token}/{idMesa}', [CarritoController::class, 'admComprobarProductosPorMesa']);

// PRODUCTO

Route::get('/admObtenerListadoProducto/{token}', [ProductoController::class, 'admObtenerListadoProducto']);

Route::get('/admOcultarProducto/{token}/{idProducto}', [ProductoController::class, 'admOcultarProducto']);

Route::post('/admEditarProducto/{token}/{idProducto}', [ProductoController::class, 'admEditarProducto']);

Route::post('/admAddProducto/{token}/{idProducto}', [ProductoController::class, 'admAddProducto']);
