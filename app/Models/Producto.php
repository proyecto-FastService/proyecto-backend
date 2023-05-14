<?php

namespace App\Models;
use App\Models\Mesa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $primaryKey = "id";

    protected $fillable = [
        'nombre',
        'existencias',
        'alergenos',
        'precios',
        'descripcion',
        'ingredientes',
        'imagen',
    ];

    public function mesa(){
        return $this->hasMany(Mesa::class);
    }

    public function mesas(){
        return $this->belongsTo(Mesa::class);
    }

    public static function obtenerTodosProductosEnStock(){
        $productos = Producto::where('existencias', '>', 0)->get();
        return $productos;
    }
}
