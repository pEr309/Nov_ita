<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'jasibeth Perez',
            'email'=> 'jasi@gmail.com',
            'password' => Hash::make('1234'),
            'rol_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'jose Perez',
            'email'=> 'jose@gmail.com',
            'password' => Hash::make('1234'),
            'rol_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Are Perez',
            'email'=> 'Are@gmail.com',
            'password' => Hash::make('1234'),
            'rol_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Adora Figueroa',
            'email'=> 'Ado@gmail.com',
            'password' => Hash::make('1234'),
            'rol_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

    }
}
