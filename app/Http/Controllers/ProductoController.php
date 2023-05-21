<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function obtenerTodosProductosConStock(){
        return Producto::obtenerTodosProductosEnStock();
    }

    public function admAddProducto(){
        // el administrador añade un producto entero por lo que nos deben pasar todos los detalles del producto, crear el objeto y meterlo en la base de datos
    }

    public function admOcultarProducto($idProducto){
        // el administrador pone el stock a 0 de un producto para que no se muestre a los cliente
    }

    public function admEditarProducto($producto){
        // recogemos el objeto producto y hacemos un flush con la id
    }

    public function admObtenerListadoProducto(){
        // recogemos todos los productos con y sin stock y se los devolvemos a la vista para que los muestre y los administre
    }


}