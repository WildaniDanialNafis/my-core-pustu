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
        Schema::create('data_kesehatan_gigi', function (Blueprint $table) {
            $table->id('id_data_kesehatan_gigi');
            $table->foreignId('id_kesehatan_gigi')->constrained('kesehatan_gigi', 'id_kesehatan_gigi')->onDelete('cascade');
            $table->dateTime('pemeriksaan')->nullable();
            $table->integer('jumlah_gigi')->nullable();
            $table->integer('jumlah_gigi_berlubang')->nullable();
            $table->enum('plak', ['Bersih', 'Kotor'])->nullable();
            $table->enum('risiko_gigi_berlubang', ['Tinggi', 'Sedang', 'Rendah'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kesehatan_gigi');
    }
};
