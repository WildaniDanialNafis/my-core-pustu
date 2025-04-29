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
        Schema::create('kn3', function (Blueprint $table) {
            $table->id('id_kn3');
            $table->foreignId('id_pelayanan_kesehatan_neonatus')->constrained('pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus')->onDelete('cascade');
            $table->enum('menyusu', ['Ya','Tidak'])->nullable();
            $table->enum('tali_pusat', ['Ya','Tidak'])->nullable();
            $table->enum('tanda_bahaya', ['Ya','Tidak'])->nullable();
            $table->enum('identifikasi_kuning', ['Ya','Tidak'])->nullable();
            $table->string('keterangan_identifikasi_kuning', 255)->nullable();
            $table->text('masalah')->nullable();
            $table->text('dirujuk_ke')->nullable();
            $table->string('nama_jelas_petugas', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kn3');
    }
};
