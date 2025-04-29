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
        Schema::create('riwayat_kelahiran', function (Blueprint $table) {
            $table->id('id_riwayat_kelahiran');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->string('g',255)->nullable();
            $table->string('p',255)->nullable();
            $table->string('a',255)->nullable();
            $table->dateTime('tanggal_lahir')->nullable();
            $table->enum('persalinan', ['Spontan', 'Sungsang'])->nullable();
            $table->enum('tindakan', ['Ekstraksi Vakum', 'Ekstraksi Forsep', 'SC'])->nullable();
            $table->enum('penolong_persalinan', ['Dokter Spesialis', 'Dokter', 'Bidan'])->nullable();
            $table->string('cap_kaki_bayi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kelahiran');
    }
};
