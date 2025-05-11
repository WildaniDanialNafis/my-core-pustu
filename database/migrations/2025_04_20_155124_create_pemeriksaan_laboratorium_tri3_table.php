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
        Schema::create('pemeriksaan_laboratorium_tri3', function (Blueprint $table) {
            $table->id('id_pemeriksaan_laboratorium_tri3');
            $table->foreignId('id_pemeriksaan_trimester3')->constrained('pemeriksaan_trimester3', 'id_pemeriksaan_trimester3')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->double('hemoglobin')->nullable();
            $table->text('tindak_hemoglobin')->nullable();
            $table->double('gula_darah_puasa')->nullable();
            $table->text('tindak_gula_puasa')->nullable();
            $table->double('gula_darah_2_jam_post_pradinal')->nullable();
            $table->text('tindak_gula_darah_2_jam_post_pradinal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_laboratorium_tri3');
    }
};
