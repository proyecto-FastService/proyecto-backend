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
}
