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
    public function hacerPedido()
    {
        //
    }

    public function pagarPedido()
    {
        //
    }

    public function llamarCamarero()
    {
        //
    }

    public function cargarProductosConStock($id, $token = null){
        if (Mesa::comprobarMesaOcupada($id)){
            Mesa::ocuparMesaPorId($id); 
            $codigo = Str::random(20);
            Mesa::codificarMesa($id, $codigo);
            // Creamos una instancia del controlador "ProductoController"
            $productoController = new ProductoController;
            // Llamamos a la función "mostrarProductos" del controlador "ProductoController"
            $productosEnStock = $productoController->obtenerTodosProductosConStock();
            return ['token' => $codigo, 'productosEnStock' => $productosEnStock];
        }
        else if(Mesa::comprobarMesaOcupadaPorToken($id, $token)){
            // Creamos una instancia del controlador "ProductoController"
            $productoController = new ProductoController;
            // Llamamos a la función "mostrarProductos" del controlador "ProductoController"
            $productosEnStock = $productoController->obtenerTodosProductosConStock();
            return $productosEnStock;
        }
        else {
            return "Esta mesa esta ocupada por alguien, TUNANTE";
        }
    }
}
