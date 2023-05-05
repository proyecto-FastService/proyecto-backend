<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //

    public function obtenerTodosProductosConStock(){
        return Producto::obtenerTodosProductosEnStock();
    }
}