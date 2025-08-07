<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HariLiburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_hari_libur')->insert([
            ['tanggal' => '2025-01-01', 'keterangan' => 'Tahun Baru Masehi'],
            ['tanggal' => '2025-03-29', 'keterangan' => 'Hari Raya Nyepi'],
            ['tanggal' => '2025-03-31', 'keterangan' => 'Idul Fitri Hari ke-1'],
            ['tanggal' => '2025-04-01', 'keterangan' => 'Idul Fitri Hari ke-2'],
            ['tanggal' => '2025-05-29', 'keterangan' => 'Hari Raya Waisak'],
            ['tanggal' => '2025-08-17', 'keterangan' => 'Hari Kemerdekaan RI'],
            ['tanggal' => '2025-12-25', 'keterangan' => 'Hari Raya Natal'],
            ['tanggal' => '2025-12-26', 'keterangan' => 'Cuti Bersama Hari Raya Natal'],
        ]);
    }
}