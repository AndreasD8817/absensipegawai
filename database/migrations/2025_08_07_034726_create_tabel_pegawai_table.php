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
        Schema::create('tabel_pegawai', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->string('nip', 50)->nullable()->unique();
            $table->string('nama_lengkap', 100);
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('jabatan', 50)->nullable();
            $table->enum('role', ['pegawai', 'admin', 'superadmin'])->default('pegawai');
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif');
            $table->integer('radius_absensi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pegawai');
    }
};