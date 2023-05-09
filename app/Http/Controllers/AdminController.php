<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return redirect('home');
    }

    public function desactivarProducto(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
        ]);

        $producto = Producto::find($request->id);
        $producto->existencias = 0;
        $producto->save();

        return redirect("");
    }

    public function añadirProducto(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'existencias' => 'required|numeric',
            'alergenos' => 'required',
            'precios' => 'required|numeric',
            'descripcion' => 'required',
            'ingredientes' => 'required',
        ]);

        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->existencias = $request->existencias;
        $producto->alergenos = $request->alergenos;
        $producto->precio = $request->precios;
        $producto->descripcion = $request->descripcion;
        $producto->ingredientes = $request->ingredientes;
        $producto->save();

        return redirect("");
    }

    public function editarProducto(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
            'nombre' => 'required',
            'existencias' => 'required|numeric',
            'alergenos' => 'required',
            'precios' => 'required|numeric',
            'descripcion' => 'required',
        ]);

        $producto = Producto::find($request->id);
        $producto->nombre = $request->nombre;
        $producto->existencias = $request->existencias;
        $producto->alergenos = $request->alergenos;
        $producto->precio = $request->precios;
        $producto->descripcion = $request->descripcion;
        $producto->ingredientes = $request->ingredientes;
        $producto->save();

        return redirect("");
    }

    public function eliminarMesa(Request $request)
    {
        $request->validate([
            'id' => 'required|numeric',
        ]);

        $mesa = Mesa::find($request->id);
        $mesa->delete();

        return redirect("");
    }

    public function añadirMesa()
    {
        $mesa = new Mesa();
        $mesa->save();

        return redirect("");
    }
}
