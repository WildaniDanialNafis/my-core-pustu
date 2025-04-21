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
        Schema::create('anak_sudah_periksa', function (Blueprint $table) {
            $table->id('id_anak_sudah_periksa');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->enum('bayi_baru_lahir', ['0-28 hari', '0-1 tahun', '1-2 tahun', '2-3 tahun', '3-4 tahun', '4-5 tahun', '5-6 tahun'])->nullable();
            $table->enum('kn', ['0', '1', '2', '3'])->nullable();
            $table->dateTime('tanggal_kn')->nullable();
            $table->string('tempat_kn', 255)->nullable();
            $table->string('perawatan_tali_pusat', 255)->nullable();
            $table->enum('imd', ['Ya', 'Tidaka'])->nullable();
            $table->enum('vitamin_k1', ['Ya', 'Tidak'])->nullable();
            $table->enum('imunisasi_hepatitis_b', ['Ya', 'Tidak'])->nullable();
            $table->string('tipe_salep', 255)->nullable();
            $table->enum('status_salep', ['Ya', 'Tidak'])->nullable();
            $table->string('tipe_skrining', 255)->nullable();
            $table->enum('status_skrining', ['Ya', 'Tidak'])->nullable();
            $table->text('kie')->nullable();
            $table->enum('ppia1', ['Ya', 'Tidak'])->nullable();
            $table->enum('ppia12', ['Ya', 'Tidak'])->nullable();
            $table->enum('ppia3', ['Ya', 'Tidak'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_sudah_periksa');
    }
};
