<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Teknis', 'Administrasi', 'IT Support', 'Keamanan'];
        foreach ($categories as $cat) {
            DB::table('kategori')->insert([
                'nama_kategori' => $cat,
                'deskripsi' => 'Kategori ' . $cat,
                'created_at' => now(),
            ]);
        }
    }
}