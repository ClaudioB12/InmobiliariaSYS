<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'Claudio Bustinza Inofuente',
            'email'=>'guitarrapuno18@gmail.com',
            'password'=>bcrypt('71480000')
        ]);



    }
}
