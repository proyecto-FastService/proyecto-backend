<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function pedirListaProductosPorId($token, $arrayProductosIds){
        // asignarle a la mesa con el token uno a uno todos los productos, crear un registro por cada producto que pida esa mesa
        //tambien hay que restar la cantidad pedida del stock de ese producto
    }

    public function obtenerProductosPedidosPorTokenMesa($token){
        // buscamos en la tabla carrito todos los registro para un token (mesa) y los devolvemos
    }

    public function pagarCarrito($token){
        // recogemos todos los registros que haya en la base de datos para ese token, y ponemos pagado a 1 para todos los productos que haya
    }

    public function admComprobarProductosPorMesa($idMesa){
        //el administrador comprueba los productos que tiene pedidos una mesa y la cantidad de dinero que es
    }

}
