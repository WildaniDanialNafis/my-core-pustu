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
        Schema::create('nonatus_kn1', function (Blueprint $table) {
            $table->id('id_neonatus_kn1');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->enum('menyusu', ['Ya', 'Tidak'])->nullable();
            $table->enum('tali_pusat', ['Ya', 'Tidak'])->nullable();
            $table->enum('vit_k1', ['Ya', 'Tidak'])->nullable();
            $table->enum('tipe_salep', ['Salep', 'Tetes Mata'])->nullable();
            $table->enum('status_salep', ['Ya', 'Tidak'])->nullable();
            $table->enum('imunisasi_hb', ['Ya', 'Tidak'])->nullable();
            $table->dateTime('tgl_imunisasi')->nullable();
            $table->string('nomor_batch', 50)->nullable();
            $table->integer('bb')->nullable(); // Berat badan (gram)
            $table->integer('pb')->nullable(); // Panjang badan (cm)
            $table->integer('lk')->nullable(); // Lingkar kepala (cm)
            $table->enum('skrining_hipotiroid_kogenital', ['Ya', 'Tidak', 'Sudah Diberikan'])->nullable();
            $table->text('masalah')->nullable();
            $table->text('dirujuk_ke')->nullable();
            $table->string('nama_petugas', 255)->nullable();
            $table->text('catatan_penting')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonatus_kn1');
    }
};
