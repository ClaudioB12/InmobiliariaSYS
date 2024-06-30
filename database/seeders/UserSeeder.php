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
        $user=User::create([
            'name'=>'Mullisaca Condori Carlos Augusto',
            'email'=>'mullisacacarlosaugusto5nc5@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $user=User::create([
            'name'=>'Jhon Alex Gutierrez Morales',
            'email'=>'gutierrezmoralesalex6@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $user=User::create([
            'name'=>'nilver salcca aquino  ',
            'email'=>'nilver.salcca@gmail.com',
            'password'=>bcrypt('12345678')
        ]);


    }
}
