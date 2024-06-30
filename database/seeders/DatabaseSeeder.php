<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Solicitud;
use App\Models\Transaccion;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //User::factory()->create([
            //'name' => 'Test User',
            //'email' => 'test@example.com',
        //]);
        Storage::makeDirectory('clients');
        $this->call([
            UserSeeder::class,
            ClienteSeeder::class,
            TransaccionSeeder::class,
            InmuebleSeeder::class,
            SolicitudSeeder::class,
        ]);
    }
}
