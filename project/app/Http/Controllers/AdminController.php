<?php

namespace App\Http\Controllers;

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

    public function desactivarProducto()
    {
        //
    }

    public function añadirProducto()
    {
        //
    }

    public function editarProducto()
    {
        //
    }
}
