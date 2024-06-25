<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inmueble>
 */
class InmuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $titulo = $this->faker->unique()->word(500);


        return [
            'titulo' => $titulo,
            'descripcion' => $this->faker->paragraph,
            'direccion' => $this->faker->address,
            'categoria' => $this->faker->numberBetween(1, 5), // Asumiendo que tienes 5 categorías
            'precio' => $this->faker->randomFloat(2, 50000, 500000), // Precio entre 50,000 y 500,000
            'estado' => $this->faker->numberBetween(0, 1), // Asumiendo que 0 es inactivo y 1 es activo
        ];
    }
}
