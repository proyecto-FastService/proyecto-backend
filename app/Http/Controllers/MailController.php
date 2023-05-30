<?php

namespace App\Http\Controllers;

use App\Mail\CorreoFastService;
use App\Mail\CorreoCocina;
use App\Mail\CorreoFactura;
use App\Mail\NombreDelCorreo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Models\Carrito;
use App\Models\Producto;
use App\Models\Mesa;
use Illuminate\Support\Collection;

class MailController extends Controller
{

    public function enviarCorreo($token, $email, $nombreEmpresa = null, $cif = null)
    {
        $productosCarrito = Carrito::where('token_mesa', $token)->pluck('id_producto')->toArray();

        // Busca los detalles de los productos en la tabla 'productos' utilizando los 'id_producto'
        $productos = Producto::whereIn('id', $productosCarrito)->get();

        // Calcula el total sumando los precios de los productos
        $total = $productos->sum('precio');
        if ($nombreEmpresa != null) {
            $correo = new CorreoFactura($productos, $total, $nombreEmpresa, $cif);
            Mail::to($email)->send($correo);
        } else {
            $correo = new CorreoFastService($productos, $total);
            Mail::to($email)->send($correo);
        }
    }

    public function enviarPedidoCocina($productos, $tokenMesa)
    {
        // Obtener el ID de la mesa a partir del token de la mesa
        $mesa = Mesa::where('codigo', $tokenMesa)->first();
        $mesaId = $mesa->id;

        // Obtener los detalles completos de los productos
        $productosIds = array_column($productos, 'id');
        $productosCompletos = Producto::whereIn('id', $productosIds)->get();

        // Crear una colección de productos con todos los datos
        $productosCollection = collect($productosCompletos);

        // Resto del código...

        // Pasar la colección de productos al constructor de CorreoCocina
        $correo = new CorreoCocina($productosCollection, $mesaId);
        Mail::to("cocinafastservice@outlook.es")->send($correo);
    }
}
