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
        Schema::create('ringkasan_kesimpulan_nifas', function (Blueprint $table) {
            $table->id('id_ringkasan_kesimpulan_nifas');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->enum('keadaan_ibu', ['Sehat', 'Sakit', 'Meninggal'])->nullable();
            $table->enum('keadaan_bayi', ['Sehat', 'Sakit', 'Kelainan Bawaan', 'Meninggal'])->nullable();
            $table->text('keterangan_keadaan_bayi')->nullable();
            $table->enum('komplikasi_nifas', ['Pendarahan', 'Infeksi', 'Hipertensi', 'Lain-lain'])->nullable();
            $table->text('keterangan_komplikasi_nifas')->nullable();
            $table->text('kesimpulan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ringkasan_kesimpulan_nifas');
    }
};
