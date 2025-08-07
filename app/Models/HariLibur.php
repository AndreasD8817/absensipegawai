<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HariLibur extends Model
{
    use HasFactory;

    protected $table = 'tabel_hari_libur';
    protected $primaryKey = 'tanggal'; // Primary key-nya adalah tanggal
    protected $keyType = 'string';    // Tipe datanya bukan integer
    public $incrementing = false;     // Karena bukan auto-increment
    public $timestamps = false;

    protected $fillable = [
        'tanggal',
        'keterangan',
    ];
}