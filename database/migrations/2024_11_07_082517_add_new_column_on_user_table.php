<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->enum('jurusan', ['fisika', 'kimia', 'biologi', 'matematika', 'ilmu komputer']);
            $table->unsignedTinyInteger('semester')->check(function ($query) {
                $query->whereBetween('semester', [1, 14]);
            });
            $table->foreignId('fakultas_id')->constrained('fakultas');
        });
    }

    /**
     * Kembalikan perubahan migrasi.
     */
    public function down(): void
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropColumn(['jurusan', 'semester', 'fakultas_id']);
        });
    }
};
