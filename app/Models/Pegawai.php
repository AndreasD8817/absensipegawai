<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Ubah ini
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Ubah 'Model' menjadi 'Authenticatable'
class Pegawai extends Authenticatable
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'tabel_pegawai';

    // Primary key dari tabel
    protected $primaryKey = 'id_pegawai';

    // Kolom-kolom yang boleh diisi secara massal
    protected $fillable = [
        'nip',
        'nama_lengkap',
        'username',
        'password',
        'jabatan',
        'role',
        'status',
        'radius_absensi',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    // Relasi: Satu pegawai bisa memiliki banyak absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'id_pegawai', 'id_pegawai');
    }
}