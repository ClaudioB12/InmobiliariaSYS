<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SolicitudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_solicitud' => $this->faker->date(),
            'estado'=>$this->faker->randomElement(['Activo','Inactivo']),
            'cliente_id' => \App\Models\Cliente::factory(), // Asocia automáticamente con un cliente
            'inmueble_id' => \App\Models\Inmueble::factory(), // Asocia automáticamente con un inmueble
        ];
    }
}
