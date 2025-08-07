<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tabel_absensi', function (Blueprint $table) {
            $table->id('id_absensi');
            $table->foreignId('id_pegawai')->constrained('tabel_pegawai', 'id_pegawai')->onDelete('cascade');
            $table->enum('tipe_absensi', ['Masuk', 'Pulang', 'Dinas Luar']);
            $table->dateTime('waktu_absensi');
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->text('catatan')->nullable();
            $table->string('foto', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_absensi');
    }
};