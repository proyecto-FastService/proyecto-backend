<?php

namespace Database\Factories;
use App\Models\Carrito;
use App\Models\Mesa;
use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrito>
 */
class CarritoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $mesa = Mesa::factory()->create();
        $producto = Producto::factory()->create();

        return [
            'id_mesa' => $mesa->id,
            'id_producto' => $producto->id,
        ];
    }
}
