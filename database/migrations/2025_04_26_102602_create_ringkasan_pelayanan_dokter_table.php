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
        Schema::create('ringkasan_pelayanan_dokter', function (Blueprint $table) {
            $table->id('id_ringkasan_pelayanan_dokter');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->string('pemeriksa', 255)->nullable();
            $table->string('stamp',255)->nullable();
            $table->string('paraf',255)->nullable();
            $table->text('keluhan')->nullable();
            $table->text('pemeriksaan')->nullable();
            $table->text('tindakan')->nullable();
            $table->dateTime('tanggal_kembali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ringkasan_pelayanan_dokter');
    }
};
