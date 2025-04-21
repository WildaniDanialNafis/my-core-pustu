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
        Schema::create('pemeriksaan_fisik_tri3', function (Blueprint $table) {
            $table->id('id_pemeriksaan_fisik_tri3');
            $table->foreignId('id_pemeriksaan_trimester3')->constrained('pemeriksaan_trimester3', 'id_pemeriksaan_trimester3')->onDelete('cascade');
            $table->enum('keadaan_umum',['Baik', 'Sedang', 'Buruk'])->nullable();
            $table->enum('konjuctiva', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('sklera', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('gigi_mulut', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('tht', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('leher', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('jantung', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('paru', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('perut', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('tungkai', ['Normal', 'Tidak Normal'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_fisik_tri3');
    }
};
