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
        Schema::create('riwayat_perilaku_berisiko', function (Blueprint $table) {
            $table->id('id_riwayat_perilaku_berisiko');
            $table->foreignId('id_evaluasi_kesehatan_bumil')->constrained('evaluasi_kesehatan_bumil', 'id_evaluasi_kesehatan_bumil')->onDelete('cascade');
            $table->enum('perilaku', ['Merokok', 'Pola makan berisiko', 'Aktivitas fisik kurang', 'Alkohol', 'Obat-obatan', 'Kosmetik', 'Lain-lain'])->nullable();
            $table->text('penjelasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_perilaku_berisiko');
    }
};
