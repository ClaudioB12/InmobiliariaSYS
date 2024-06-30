<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes=Cliente::factory(50)->create();
        foreach($clientes as $cliente){
            Image::factory(1)->create([
                'imageable_id'=>$cliente->id,
                'imageable_type'=>Cliente::class,
            ]);

        }
    }
}
