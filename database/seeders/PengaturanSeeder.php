<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_pengaturan')->insert([
            ['nama_pengaturan' => 'lokasi_lat', 'nilai_pengaturan' => '-7.263062'],
            ['nama_pengaturan' => 'lokasi_lon', 'nilai_pengaturan' => '112.745645'],
            ['nama_pengaturan' => 'radius_meter', 'nilai_pengaturan' => '10000'],
        ]);
    }
}