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
        Schema::create('evaluasi_kehamilan', function (Blueprint $table) {
            $table->id('id_evaluasi_kehamilan');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->string('pemeriksa', 255)->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->integer('usia_gestasi')->nullable();
            $table->integer('denyut_jantung_janin')->nullable();
            $table->integer('sistolik')->nullable();
            $table->integer('diastolik')->nullable();
            $table->integer('gerakan_bayi')->nullable();
            $table->integer('urin_protein')->nullable();
            $table->integer('urin_reduksi')->nullable();
            $table->integer('hemoglobin')->nullable();
            $table->integer('kalsium')->nullable();
            $table->integer('aspirin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluasi_kehamilan');
    }
};
