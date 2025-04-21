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
        Schema::create('pemeriksaan_laboratorium_tri1', function (Blueprint $table) {
            $table->id('id_pemeriksaan_laboratorium_tri1');
            $table->foreignId('id_pemeriksaan_trimester1')->constrained('pemeriksaan_trimester1', 'id_pemeriksaan_trimester1')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->double('hemoglobin')->nullable();
            $table->text('tindak_hemoglobin')->nullable();
            $table->string('goldar', 10)->nullable();
            $table->string('rhesus', 10)->nullable();
            $table->text('tindak_goldar_rhesus')->nullable();
            $table->double('gula_darah_sewaktu')->nullable();
            $table->text('tindak_gula_darah')->nullable();
            $table->string('ppia', 255)->nullable();
            $table->text('tindak_ppia')->nullable();
            $table->enum('h', ['R', 'NR'])->nullable();
            $table->text('tindak_h')->nullable();
            $table->enum('s', ['R', 'NR'])->nullable();
            $table->text('tindak_s')->nullable();
            $table->enum('hepatitis_b', ['R', 'NR'])->nullable();
            $table->text('tindak_hepatitis_b')->nullable();
            $table->text('lain_lain')->nullable();
            $table->text('tindak_lain_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_laboratorium_tri1');
    }
};
