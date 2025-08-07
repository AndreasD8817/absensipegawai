<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'tabel_absensi';
    protected $primaryKey = 'id_absensi';
    public $timestamps = false; // Tabel ini tidak punya kolom created_at/updated_at

    protected $fillable = [
        'id_pegawai',
        'tipe_absensi',
        'waktu_absensi',
        'latitude',
        'longitude',
        'catatan',
        'foto',
    ];

    // Relasi: Setiap absensi dimiliki oleh satu pegawai
    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai', 'id_pegawai');
    }
}