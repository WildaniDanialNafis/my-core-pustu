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
        Schema::create('kapsul_anak', function (Blueprint $table) {
            $table->id('id_kapsul_anak');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->foreignId('id_umur_kapsul_anak')->constrained('umur_kapsul_anak', 'id_umur_kapsul_anak')->onDelete('cascade');
            $table->enum('kapsul', ['Biru', 'Merah'])->nullable();
            $table->dateTime('februari')->nullable();
            $table->dateTime('agustus')->nullable();
            $table->dateTime('obat_cacing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapsul_anak');
    }
};
