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
        Schema::create('tabel_pengaturan', function (Blueprint $table) {
            $table->increments('id_pengaturan');
            $table->string('nama_pengaturan', 50)->unique();
            $table->string('nilai_pengaturan', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pengaturan');
    }
};