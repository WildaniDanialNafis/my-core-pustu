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
        Schema::create('riwayat_kehamilan', function (Blueprint $table) {
            $table->id('id_riwayat_kehamilan');
            $table->foreignId('id_evaluasi_kesehatan_bumil')->constrained('evaluasi_kesehatan_bumil', 'id_evaluasi_kesehatan_bumil')->onDelete('cascade');
            $table->dateTime('tahun')->nullable();
            $table->double('berat_lahir')->nullable();
            $table->string('persalinan', 255)->nullable();
            $table->string('penolong_persalinan',255)->nullable();
            $table->string('komplikasi',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_kehamilan');
    }
};
