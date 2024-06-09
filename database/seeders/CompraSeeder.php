<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Compras')->insert([
            'nombre' => 'Bolsa Dama',
            'imagen' => 'img.jpg',
            'precio' => 1000,
            'total'=> 250, 
            'user_id' => 1,
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('Compras')->insert([
            'nombre' => 'Reloj Niño',
            'imagen' => 'img.jpg',
            'precio' => 1000,
            'total'=> 250, 
            'user_id' => 1,
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('Compras')->insert([
            'nombre' => 'Billetera Caballero',
            'imagen' => 'img.jpg',
            'precio' => 1000,
            'total'=> 250, 
            'user_id' => 1,
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('Compras')->insert([
            'nombre' => 'Reloj Niña',
            'imagen' => 'img.jpg',
            'precio' => 1000,
            'total'=> 250, 
            'user_id' => 1,
            'created_at' =>Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
