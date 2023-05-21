<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use App\Http\Controllers\MesaController;
use App\Models\Mesa;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function pedirListaProductosPorId($token, Request $request)
    {
        $jsonData = $request->input('arrayProductosIds');

        if ($jsonData && isset($jsonData['cartItems']) && is_array($jsonData['cartItems'])) {
            $cartItems = $jsonData['cartItems'];
            $mesa = $jsonData['token'];

            foreach ($cartItems as $cartItem) {
                $idProducto = $cartItem['id'];

                Carrito::create([
                    'token_mesa' => $mesa,
                    'id_producto' => $idProducto
                ]);

                // Restar 1 al stock del producto
                $producto = Producto::find($idProducto);
                $producto->existencias -= 1;
                $producto->save();
            }

            // Resto del código...

            // Retornar una respuesta adecuada
            return response()->json(['productos' => $jsonData]);
        } else {
            return response()->json(['error' => 'Datos de pedido no válidos'], 400);
        }
    }

    public function devolverProductosPedidosNoPagados($token)
    {
        // Obtener los productos no pagados para el token de mesa específico
        $productosNoPagados = Carrito::where('token_mesa', $token)
            ->where('pagado', 0)
            ->get();

        // Arreglo para almacenar los detalles de los productos
        $productos = [];

        foreach ($productosNoPagados as $producto) {
            // Obtener el producto correspondiente al id del producto no pagado
            $productoDetalle = Producto::find($producto->id_producto);

            if ($productoDetalle) {
                // Agregar los detalles del producto al arreglo
                $productos[] = [
                    'id' => $productoDetalle->id,
                    'nombre' => $productoDetalle->nombre,
                    'precio' => $productoDetalle->precio,
                    // Agrega aquí los demás campos que necesites del producto
                ];
            }
        }

        // Retornar el arreglo de productos en formato JSON
        return response()->json(['productosNoPagados' => $productos]);
    }


    public function pagarCarrito($token)
    {
        // Recogemos todos los registros que haya en la base de datos para ese token,
        // y ponemos pagado a 1 para todos los productos que haya
        Carrito::where('token_mesa', $token)->update(['pagado' => 1]);

        // Actualizar la mesa asociada al token
        $mesa = Mesa::where('codigo', $token)->first();
        if ($mesa) {
            $mesa->update([
                'ocupada' => 0,
                'codigo' => null
            ]);
        }

        // Retornar una respuesta adecuada
        return response()->json(['message' => 'Carrito pagado correctamente']);
    }


    public function admComprobarProductosPorMesa($token, $idMesa)
    {
        $mesa = Mesa::find(0);
        $mesaCliente = Mesa::find($idMesa);

        if ($mesa->codigo === $token) {
            // El administrador comprueba los productos que tiene pedidos una mesa

            // Obtener los productos pedidos de la mesa cliente
            $productosPedidos = Carrito::where('token_mesa', $mesaCliente->codigo)->get();

            // Arreglo para almacenar los detalles de los productos
            $productos = [];

            foreach ($productosPedidos as $producto) {
                $productoDetalle = Producto::find($producto->id_producto);
                // Agregar los detalles de cada producto al arreglo
                $productos[] = [
                    'id' => $productoDetalle->id,
                    'nombre' => $productoDetalle->nombre,
                    'precio' => $productoDetalle->precio,
                ];
            }

            // Retornar el arreglo de productos en formato JSON
            return response()->json(['productos' => $productos]);
        }

        return response()->json(['error' => 'Token no válido'], 400);
    }
}
