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
        Schema::create('tabel_dinas_luar', function (Blueprint $table) {
            $table->id('id_dinas');
            $table->foreignId('id_absensi')->constrained('tabel_absensi', 'id_absensi')->onDelete('cascade');
            $table->string('file_surat_tugas', 255);
            $table->text('keterangan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_dinas_luar');
    }
};