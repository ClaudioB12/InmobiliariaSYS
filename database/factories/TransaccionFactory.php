<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaccion>
 */
class TransaccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_transaccion' => $this->faker->randomElement(['Compra', 'Venta', 'Depósito', 'Retiro']),
            'monto' => $this->faker->randomFloat(2, 10, 1000),
            'fecha_transaccion' => $this->faker->date(),
            'cliente_id' => \App\Models\Cliente::factory(), // Asocia automáticamente con un cliente
        ];
    }
}
