<?php

namespace Database\Seeders;

use App\Models\Transaccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaccion::factory()->count(10)->create(); // Crear 10 registros de prueba
    }
}
