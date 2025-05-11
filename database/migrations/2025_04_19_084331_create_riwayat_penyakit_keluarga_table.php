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
        Schema::create('riwayat_penyakit_keluarga', function (Blueprint $table) {
            $table->id('id_riwayat_penyakit_keluarga');
            $table->foreignId('id_evaluasi_kesehatan_bumil')->constrained('evaluasi_kesehatan_bumil', 'id_evaluasi_kesehatan_bumil')->onDelete('cascade');
            $table->enum('riwayat_penyakit', ['Hipertensi', 'Diabetes', 'Sesak Nafas', 'Jantung', 'TB', 'Alergi', 'Jiwa', 'Kelainan Darah', 'Hepatitis B'])->nullable();
            $table->text('penjelasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_penyakit_keluarga');
    }
};
