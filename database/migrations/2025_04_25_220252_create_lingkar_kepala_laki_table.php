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
        Schema::create('lingkar_kepala_laki', function (Blueprint $table) {
            $table->id('id_lingkar_kepala_laki');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->double('lingkar_kepala')->nullable();
            $table->integer('bulan')->nullable();
            $table->integer('tahun')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lingkar_kepala_laki');
    }
};
