<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Compra__ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Compra__Productos')->insert([
            'compra_id'=> 1,
            'producto_id'=>2,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('Compra__Productos')->insert([
            'compra_id'=> 2,
            'producto_id'=>1,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('Compra__Productos')->insert([
            'compra_id'=> 2,
            'producto_id'=>1,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('Compra__Productos')->insert([
            'compra_id'=> 2,
            'producto_id'=>2,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);
    }
}
