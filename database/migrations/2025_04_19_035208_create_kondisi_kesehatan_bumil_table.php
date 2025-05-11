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
        Schema::create('kondisi_kesehatan_bumil', function (Blueprint $table) {
            $table->id('id_kondisi_kesehatan_bumil');
            $table->foreignId('id_evaluasi_kesehatan_bumil')->constrained('evaluasi_kesehatan_bumil', 'id_evaluasi_kesehatan_bumil')->onDelete('cascade');
            $table->date('tanggal_periksa')->nullable();
            $table->double('tb')->nullable();
            $table->double('bb')->nullable();
            $table->double('lila')->nullable();
            $table->double('imt')->nullable();
            $table->enum('status', ['Kurus', 'Normal', 'Gemuk', 'Obesitas'])->nullable();
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi_kesehatan_bumil');
    }
};
