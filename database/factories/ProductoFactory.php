<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word,
            'existencias' => $this->faker->numberBetween(0, 100),
            'alergenos' => $this->faker->word,
            'precio' => $this->faker->randomFloat(2, 0, 100),
            'descripcion' => $this->faker->sentence,
            'ingredientes' => $this->faker->sentence,
            'imagen' => $this->faker->imageUrl(),
        ];
    }
}
