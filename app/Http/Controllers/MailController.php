<?php

namespace App\Http\Controllers;

use App\Mail\CorreoFastService;
use App\Mail\NombreDelCorreo;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use App\Models\Carrito;
use App\Models\Producto;
use Illuminate\Support\Collection;

class MailController extends Controller
{

    public function enviarCorreo($token, $email)
    {
        $productosCarrito = Carrito::where('token_mesa', $token)->pluck('id_producto')->toArray();

        // Busca los detalles de los productos en la tabla 'productos' utilizando los 'id_producto'
        $productos = Producto::whereIn('id', $productosCarrito)->get();

        // Calcula el total sumando los precios de los productos
        $total = $productos->sum('precio');

        $correo = new CorreoFastService($productos, $total);
        Mail::to($email)->send($correo);
    }
}
