<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombre' => 'Reloj de Caballero',
            'descripcion' => 'Para una ocasión especial',
            'compra_id'=> 1,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Billetera de caballero',
            'descripcion' => 'Para una ocasión especial',
            'compra_id'=> 2,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Reloj de niña',
            'descripcion' => 'Para una ocasión especial',
            'compra_id'=> 3, 
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

    }
}
