<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabel_pegawai')->insert([
            [
                'nip' => '1',
                'nama_lengkap' => 'Andreas Damai',
                'username' => 'andre',
                'password' => '$2y$10$tKWHWgAUUClyBhTAW76B3uR64pkD1zJ4Do.uouvX7OAJGWCVjUKYS',
                'jabatan' => 'Staf IT',
                'role' => 'superadmin',
                'status' => 'aktif',
                'radius_absensi' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => null,
                'nama_lengkap' => 'Arvin Labubu',
                'username' => 'arvin',
                'password' => '$2y$10$JQ1tVBQFZ6vJ2Q9XwlXuCO3W6GMDy74lBVr82fZNSrTTLWSnsm/iS',
                'jabatan' => 'Staff IT',
                'role' => 'admin',
                'status' => 'aktif',
                'radius_absensi' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            // ... Tambahkan data pegawai lainnya dari file SQL Anda di sini
        ]);
    }
}