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
        Schema::create('ringkasan_kesehatan', function (Blueprint $table) {
            $table->id('id_ringkasan_kesehatan');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->date('tanggal_periksa')->nullable();;
            $table->string('nama', 255)->nullable();
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
        Schema::dropIfExists('ringkasan_pelayanan');
    }
};
