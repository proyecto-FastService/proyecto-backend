<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = "carrito";

    protected $primaryKey = "id";

    protected $fillable = [
        'token_mesa',
        'id_producto',
        'pagado',
    ];
}
