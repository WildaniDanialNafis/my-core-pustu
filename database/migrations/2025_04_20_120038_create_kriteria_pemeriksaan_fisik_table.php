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
        Schema::create('kriteria_pemeriksaan_fisik', function (Blueprint $table) {
            $table->id('id_kriteria_pemeriksaan_fisik');
            $table->string('kriteria_pemeriksaan_fisik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria_pemeriksaan_fisik');
    }
};
