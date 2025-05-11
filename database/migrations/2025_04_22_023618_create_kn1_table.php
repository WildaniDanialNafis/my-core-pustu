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
        Schema::create('kn1', function (Blueprint $table) {
            $table->id('id_kn1');
            $table->foreignId('id_pelayanan_kesehatan_neonatus')->constrained('pelayanan_kesehatan_neonatus', 'id_pelayanan_kesehatan_neonatus')->onDelete('cascade');
            $table->enum('menyusu', ['Ya','Tidak'])->nullable();
            $table->enum('tali_pusat', ['Ya','Tidak'])->nullable();
            $table->enum('vit_k1', ['Ya','Tidak'])->nullable();
            $table->enum('salep', ['Ya','Tidak'])->nullable();
            $table->enum('tetes_mata', ['Ya','Tidak'])->nullable();
            $table->enum('imunisasi_hb', ['Ya','Tidak'])->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->string('nomor_batch', 255)->nullable();
            $table->double('bb')->nullable();
            $table->double('pb')->nullable();
            $table->double('lk')->nullable();
            $table->enum('skrining_hipotiroid_kogenital', ['Ya', 'Tidak'])->nullable();
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
        Schema::dropIfExists('kn1');
    }
};
