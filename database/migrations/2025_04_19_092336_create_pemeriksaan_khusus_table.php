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
        Schema::create('pemeriksaan_khusus', function (Blueprint $table) {
            $table->id('id_pemeriksaan_khusus');
            $table->foreignId('id_evaluasi_kesehatan_bumil')->constrained('evaluasi_kesehatan_bumil', 'id_evaluasi_kesehatan_bumil')->onDelete('cascade');
            $table->string('inspekulo', 255)->nullable();
            $table->enum('vulva', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('uretra', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('vagina', ['Normal', 'Tidak Normal'])->nullable();
            $table->enum('fluksus', ['+', '--'])->nullable();
            $table->enum('fluor', ['+', '--'])->nullable();
            $table->enum('porsio', ['Normal', 'Tidak Normal'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_khusus');
    }
};
