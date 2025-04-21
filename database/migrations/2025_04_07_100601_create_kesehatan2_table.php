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
        Schema::create('kesehatan2', function (Blueprint $table) {
            $table->id('id_kesehatan2');
            $table->foreignId('id_kesehatan1')->constrained('kesehatan1', 'id_kesehatan1')->onDelete('cascade');
            $table->enum('trimester', ['1', '2', '3'])->nullable();
            $table->date('tanggal_periksa')->nullable();
            $table->string('tempat', 50)->nullable();
            $table->decimal('timbang', 5, 2)->nullable();
            $table->decimal('ukur_lingkar_lengan_atas', 5, 2)->nullable();
            $table->integer('tekanan_darah_sistolik')->nullable();
            $table->integer('tekanan_darah_diastolik')->nullable();
            $table->decimal('periksa_tinggi_rahim', 5, 2)->nullable();
            $table->string('periksa_letak_dan_denyut_jantung_janin', 255)->nullable();
            $table->text('konseling')->nullable();
            $table->text('skrining_dokter')->nullable();
            $table->string('tablet_tambah_darah', 50)->nullable();
            $table->decimal('test_lab_hemoglobin', 5, 2)->nullable();
            $table->string('test_golongan_darah', 3)->nullable();
            $table->string('test_lab_protein_urine', 10)->nullable();
            $table->decimal('test_lab_gula_darah', 5, 2)->nullable();
            $table->string('ppia1', 50)->nullable();
            $table->string('ppia2', 50)->nullable();
            $table->string('ppia3', 50)->nullable();
            $table->text('test_laksana_kasus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan2');
    }
};
