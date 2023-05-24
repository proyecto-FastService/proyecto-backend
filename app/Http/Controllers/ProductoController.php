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

    public function admAddProducto(Request $request, $token)
    {
        // el administrador añade un producto entero por lo que nos deben pasar todos los detalles del producto, crear el objeto y meterlo en la base de datos
        $mesa = Mesa::find(0);

        if ($mesa->codigo === $token) {
            // Validar los datos recibidos desde React si es necesario
            $request->validate([
                'nombre' => 'required',
                'existencias' => 'required|numeric',
                'alergenos' => 'required',
                'precio' => 'required|numeric',
                'descripcion' => 'required',
                'ingredientes' => 'required',
                'imagen' => 'required'
            ]);

            // Crear los atributos del producto según los datos recibidos desde React
            $producto = new Producto();
            $producto->nombre = $request->input('nombre');
            $producto->existencias = $request->input('existencias');
            $producto->alergenos = $request->input('alergenos');
            $producto->precio = $request->input('precio');
            $producto->descripcion = $request->input('descripcion');
            $producto->ingredientes = $request->input('ingredientes');

            if ($request->hasFile('imagen')) {
                $imagen = $request->file('imagen');
                $nombreImagen = time().'.'.$imagen->getClientOriginalExtension();
        
                // Guardar la imagen en la carpeta deseada
                $imagen->storeAs('img', $nombreImagen, 'public');
        
                // Asignar el nombre de la imagen al atributo correspondiente del producto
                $producto->imagen = $nombreImagen;
            }

            // Guardar los cambios en la base de datos
            $producto->save();

            // Retornar una respuesta adecuada
            return response()->json(['message' => 'Producto creado correctamente']);
        }
        return response()->json(['error' => 'Token no válido'], 400);
    }

    public function admOcultarProducto($token, $idProducto)
    {
        // el administrador pone el stock a 0 de un producto para que no se muestre a los cliente

        $mesa = Mesa::find(0);

        if ($mesa->codigo === $token) {
            if ($mesa->codigo === $token) {
                $producto = Producto::find($idProducto);

                if ($producto) {
                    $producto->existencias = 0;
                    $producto->save();

                    return response()->json(['message' => 'Producto ocultado correctamente']);
                }

                return response()->json(['error' => 'Producto no encontrado'], 404);
            }
        }

        return response()->json(['error' => 'Token no válido'], 400);
    }

    public function admEditarProducto(Request $request, $token, $id)
    {
        $mesa = Mesa::find(0);

        if ($mesa->codigo === $token) {
            // Validar los datos recibidos desde React si es necesario
            $request->validate([
                'nombre' => 'required',
                'existencias' => 'required|numeric',
                'alergenos' => 'required',
                'precio' => 'required|numeric',
                'descripcion' => 'required',
                'ingredientes' => 'required'
            ]);

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
            $producto->precio = $request->input('precio');
            $producto->descripcion = $request->input('descripcion');
            $producto->ingredientes = $request->input('ingredientes');

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

        if ($mesa->codigo === $token) {
            // Recoger todos los productos
            $productos = Producto::all();

            // Retornar los productos en formato JSON
            return response()->json(['productos' => $productos]);
        }

        // El token no corresponde al registro de la mesa con ID 0
        return response()->json(['error' => 'Token no válido'], 400);
    }
}
