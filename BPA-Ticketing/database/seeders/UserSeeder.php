<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'nama_lengkap' => 'Budi Santoso',
                'nim_nip' => '1234567890',
                'status' => 'Mahasiswa',
                'prodi_unit' => 'Teknik Informatika',
                'email' => 'budi@mail.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
            ],
            [
                'nama_lengkap' => 'Siti Aminah',
                'nim_nip' => '0987654321',
                'status' => 'Dosen',
                'prodi_unit' => 'Sistem Informasi',
                'email' => 'siti@mail.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
            ],
        ]);
    }
}