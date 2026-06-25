<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ticket')->insert([
            [
                'nomor_ticket' => 'TCK-001',
                'user_id' => 1,
                'kategori_id' => 1,
                'deskripsi' => 'Laptop tidak bisa hidup',
                'status' => 'In Progress',
                'tanggal_dibuat' => now(),
                'created_at' => now(),
            ],
            [
                'nomor_ticket' => 'TCK-002',
                'user_id' => 2,
                'kategori_id' => 2,
                'deskripsi' => 'Formulir administrasi hilang',
                'status' => 'In Progress',
                'tanggal_dibuat' => now(),
                'created_at' => now(),
            ],
        ]);
    }
}
