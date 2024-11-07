<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        DB::table('fakultas')->insert([
            'nama_fakultas' => 'MIPA',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
