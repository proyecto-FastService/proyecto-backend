<?php

namespace App\Models;
use App\Models\Producto;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mesa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function producto(){
        return $this->hasMany(Producto::class);
    }

    public function productos(){
        return $this->belongsTo(Producto::class);
    }

    public static function comprobarMesaOcupada($id){
        $mesa = Mesa::find($id); // Buscamos la mesa por id

        // Comprobamos si la mesa está ocupada o no
        if($mesa->ocupada == 1) {
            return false;
        } else {
            return true;
        }
    }

    public static function comprobarMesaOcupadaPorToken($id, $token){
        $mesa = Mesa::find($id);
        if($mesa->codigo == $token) {
            return true;
        } else {
            return false;
        }
    }

    public static function codificarMesa($id, $token){
        $mesa = Mesa::find($id);
        $mesa -> codigo = $token;
        $mesa->save();
    }

    public static  function ocuparMesaPorId($id){
        $mesa = Mesa::find($id); // Buscamos la mesa por id
        $mesa->ocupada = 1; // Actualizamos el campo ocupada
        $mesa->save(); // Guardamos los cambios en la base de datos
    }
}
