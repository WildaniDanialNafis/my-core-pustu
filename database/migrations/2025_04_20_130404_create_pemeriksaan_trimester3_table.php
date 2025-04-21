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
        Schema::create('pemeriksaan_trimester3', function (Blueprint $table) {
            $table->id('id_pemeriksaan_trimester3');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->enum('rencana_konsultasi_lanjut', ['Gizi', 'Kebidanan', 'Anak', 'Penyakit Dalam', 'Neurologi', 'THT', 'Psikiatri'])->nullable();
            $table->enum('rencana_tempat_bersalin', ['FKTP','FKRTL'])->nullable();
            $table->enum('rencana_kontrasepsi', ['MAL', 'Pil', 'Suntik', 'AKDR', 'Implan', 'Steril', 'Belum Memilih'])->nullable();
            $table->enum('konseling', ['Ya','Tidak'])->nullable();
            $table->text('jelaskan')->nullable();
            $table->text('kesimpulan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_trimester3');
    }
};
