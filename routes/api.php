<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\MailController;
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

// PRODUCTO CLIENTE

Route::post('/pedirListaProductosPorId/{token}', [CarritoController::class, 'pedirListaProductosPorId']);

// RECIBO CLIENTE

Route::get('/devolverProductosPedidosNoPagados/{token}', [CarritoController::class, 'devolverProductosPedidosNoPagados']);

// CARRITO CLIENTE

Route::get('/pagarCarrito/{token}', [CarritoController::class, 'pagarCarrito']);


// LOGIN CLIENTE Y ADMIN

Route::get('/admObtenerToken/{id}/{token?}', [MesaController::class, 'admObtenerToken']);

Route::get('/cargar-productos/{id}/{token?}', [MesaController::class, 'cargarProductosConStock']);

// FUNCIONALIDADES CLIENTE

Route::get('/llamarCamarero/{id}', [MesaController::class, 'llamarCamarero']);

// MESA ADMIN

Route::get('/admObtenerTodasMesas/{token}', [MesaController::class, 'admObtenerTodasMesas']);

Route::post('/admComprobarProductosPorMesa/{token}/{idMesa}', [CarritoController::class, 'admComprobarProductosPorMesa']);

Route::post('/admLiberarMesa/{token}/{idMesa}', [MesaController::class, 'admLiberarMesa']);

Route::post('/admReservarMesa/{token}/{idMesa}', [MesaController::class, 'admReservarMesa']);

// PRODUCTO ADMIN

Route::get('/admObtenerListadoProducto/{token}', [ProductoController::class, 'admObtenerListadoProducto']);

Route::get('/admOcultarProducto/{token}/{idProducto}', [ProductoController::class, 'admOcultarProducto']);

Route::post('/admEditarProducto/{token}/{idProducto}', [ProductoController::class, 'admEditarProducto']);

Route::post('/admAddProducto/{token}', [ProductoController::class, 'admAddProducto']);

Route::get('/envioCorreo/{token}/{email}', [MailController::class, 'enviarCorreo']);