<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Mesa;

class ProductoController extends Controller
{

    public function obtenerTodosProductosConStock()
    {
        return Producto::obtenerTodosProductosEnStock();
    }

    public function admAddProducto()
    {
        // el administrador añade un producto entero por lo que nos deben pasar todos los detalles del producto, crear el objeto y meterlo en la base de datos
    }

    public function admOcultarProducto($idProducto)
    {
        // el administrador pone el stock a 0 de un producto para que no se muestre a los cliente
    }

    public function admEditarProducto(Request $request, $id, $token)
    {
        $mesa = Mesa::find(0);

        if ($mesa && $mesa->token === $token) {
            // Validar los datos recibidos desde React si es necesario
            // ...

            // Buscar el producto por su ID
            $producto = Producto::find($id);

            // Verificar si se encontró el producto
            if (!$producto) {
                return response()->json(['error' => 'Producto no encontrado'], 404);
            }

            // Actualizar los atributos del producto según los datos recibidos desde React
            $producto->nombre = $request->input('nombre');
            $producto->existencias = $request->input('existencias');
            $producto->alergenos = $request->input('alergenos');
            $producto->precios = $request->input('precios');
            $producto->descripcion = $request->input('descripcion');
            $producto->ingredientes = $request->input('ingredientes');
            $producto->imagen = $request->input('imagen');

            // Guardar los cambios en la base de datos
            $producto->save();

            // Retornar una respuesta adecuada
            return response()->json(['message' => 'Producto actualizado correctamente']);
        }
        return response()->json(['error' => 'Token no válido'], 400);
    }

    public function admObtenerListadoProducto($token)
    {
        // Verificar si el token corresponde al registro de la mesa con ID 0
        $mesa = Mesa::find(0);

        if ($mesa && $mesa->token === $token) {
            // Recoger todos los productos
            $productos = Producto::all();

            // Retornar los productos en formato JSON
            return response()->json(['productos' => $productos]);
        }

        // El token no corresponde al registro de la mesa con ID 0
        return response()->json(['error' => 'Token no válido'], 400);
    }
}
