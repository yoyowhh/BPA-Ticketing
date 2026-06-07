<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalasanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('balasan')->insert([
            [
                'ticket_id' => 1,
                'admin_id' => 1,
                'pesan' => 'Silakan cek kabel power',
                'created_at' => now(),
            ],
            [
                'ticket_id' => 2,
                'admin_id' => 2,
                'pesan' => 'Formulir baru sudah dibuat',
                'created_at' => now(),
            ],
        ]);
    }
}