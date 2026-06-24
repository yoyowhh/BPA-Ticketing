<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Data Sertifikasi Dosen', 'Program Magang Berdampak', 'Data Kerjasama', 'Data Mahasiswa'];
        foreach ($categories as $cat) {
            DB::table('kategori')->insert([
                'nama_kategori' => $cat,
                'deskripsi' => 'Kategori ' . $cat,
                'created_at' => now(),
            ]);
        }
    }
}
