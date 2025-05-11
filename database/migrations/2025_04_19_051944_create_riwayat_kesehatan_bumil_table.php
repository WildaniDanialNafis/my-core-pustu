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
        Schema::create('riwayat_kesehatan_bumil', function (Blueprint $table) {
            $table->id('id_riwayat_kesehatan_bumil');
            $table->foreignId('id_evaluasi_kesehatan_bumil')->constrained('evaluasi_kesehatan_bumil', 'id_evaluasi_kesehatan_bumil')->onDelete('cascade');
            $table->string('riwayat_penyakit', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kesehatan_bumil');
    }
};
