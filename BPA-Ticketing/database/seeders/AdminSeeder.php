<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'nama_admin' => 'Admin Super',
                'email' => '    ',
                'password' => Hash::make('password123'),
                'role' => 'super',
                'created_at' => now(),
            ],
            [
                'nama_admin' => 'Admin Staff',
                'email' => 'staff@domain.com',
                'password' => Hash::make('password123'),
                'role' => 'staff',
                'created_at' => now(),
            ],
        ]);
    }
}