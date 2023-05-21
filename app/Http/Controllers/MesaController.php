<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Mesa;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Str;

class MesaController extends Controller
{
    public function cargarProductosConStock($id, $token = null)
    {
        if (Mesa::comprobarMesaOcupada($id)) {
            Mesa::ocuparMesaPorId($id);
            $codigo = $id . Str::random(100);
            Mesa::codificarMesa($id, $codigo);
            // Creamos una instancia del controlador "ProductoController"
            $productoController = new ProductoController;
            // Llamamos a la función "mostrarProductos" del controlador "ProductoController"
            $productosEnStock = $productoController->obtenerTodosProductosConStock();
            return ['token' => $codigo, 'productosEnStock' => $productosEnStock];
        } else if (Mesa::comprobarMesaOcupadaPorToken($id, $token)) {
            // Creamos una instancia del controlador "ProductoController"
            $productoController = new ProductoController;
            // Llamamos a la función "mostrarProductos" del controlador "ProductoController"
            $productosEnStock = $productoController->obtenerTodosProductosConStock();
            return $productosEnStock;
        } else {
            return "false";
        }
    }

    public function admObtenerToken($id, $token = null)
    {
        if (Mesa::comprobarMesaOcupada($id)) {
            Mesa::ocuparMesaPorId($id);
            $codigo = $id . Str::random(100);
            Mesa::codificarMesa($id, $codigo);
            // Creamos una instancia del controlador "ProductoController"
            $productoController = new ProductoController;
            // Llamamos a la función "mostrarProductos" del controlador "ProductoController"
            $productosEnStock = $productoController->obtenerTodosProductosConStock();
            return ['token' => $codigo, 'productosEnStock' => $productosEnStock];
        } else if (Mesa::comprobarMesaOcupadaPorToken($id, $token)) {
            // Creamos una instancia del controlador "ProductoController"
            $productoController = new ProductoController;
            // Llamamos a la función "mostrarProductos" del controlador "ProductoController"
            $productosEnStock = $productoController->obtenerTodosProductosConStock();
            return $productosEnStock;
        } else {
            return "false";
        }
    }

    public function admLiberarMesa($token, $idMesa)
    {
        $mesa2 = Mesa::find(0);

        if ($mesa2->codigo === $token) {
            $mesa = Mesa::find($idMesa);

            if ($mesa) {
                $mesa->ocupada = 0;
                $mesa->codigo = null;
                $mesa->save();

                return response()->json(['message' => 'Mesa liberada exitosamente']);
            }

            return response()->json(['error' => 'Mesa no encontrada'], 404);
        }
        return response()->json(['error' => 'Token no válido'], 400);
    }


    public function admReservarMesa($token, $idMesa)
    {
        $mesa2 = Mesa::find(0);

        if ($mesa2->codigo === $token) {
            $mesa = Mesa::find($idMesa);

            if ($mesa) {
                $mesa->ocupada = 1;
                $mesa->codigo = "reservada";
                $mesa->save();

                return response()->json(['message' => 'Mesa reservada exitosamente']);
            }

            return response()->json(['error' => 'Mesa no encontrada'], 404);
        }
        return response()->json(['error' => 'Token no válido'], 400);
    }

    public function admObtenerTodasMesas($token)
    {
        // Verificar si el token corresponde al registro de la mesa con ID 0
        $mesa = Mesa::find(0);

        if ($mesa->codigo === $token) {
            // Obtener todas las mesas donde la columna 'role' no sea 'Admin'
            $mesas = Mesa::where('role', '!=', 'Admin')->get();

            // Retornar las mesas
            return response()->json(['mesas' => $mesas]);
        }

        // El token no corresponde al registro de la mesa con ID 0
        return response()->json(['error' => 'Token no válido'], 400);
    }

    public function llamarCamarero($idMesa)
    {
        // recogemos el id de la mesa y le mandamos a la mesa camarero una llamada

    }
}
