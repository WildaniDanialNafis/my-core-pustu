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
            $table->tinyInteger('g')->nullable(); // Jumlah kehamilan (Gravida)
            $table->tinyInteger('p')->nullable(); // Jumlah persalinan (Para)
            $table->tinyInteger('a')->nullable(); // Jumlah keguguran (Abortus)
            $table->dateTime('tgl_lahir')->nullable()->index();
            $table->enum('cara_persalinan', ['Spontan', 'Sungsang'])->nullable();
            $table->enum('tindakan', ['Ekstraksi vakum', 'Ekstraksi forsep', 'SC'])->nullable();
            $table->enum('penolong_persalinan', ['Dokter spesialis', 'Dokter', 'Bidan'])->nullable();
            $table->boolean('cap_kaki_bayi')->default(false);
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
