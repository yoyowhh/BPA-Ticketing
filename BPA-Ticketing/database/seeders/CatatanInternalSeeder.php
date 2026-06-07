<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatatanInternalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('catatan_internal')->insert([
            [
                'ticket_id' => 1,
                'admin_id' => 1,
                'catatan' => 'User baru, follow up tiap 2 jam',
                'created_at' => now(),
            ],
            [
                'ticket_id' => 2,
                'admin_id' => 2,
                'catatan' => 'Prioritas tinggi, perlu persetujuan supervisor',
                'created_at' => now(),
            ],
        ]);
    }
}