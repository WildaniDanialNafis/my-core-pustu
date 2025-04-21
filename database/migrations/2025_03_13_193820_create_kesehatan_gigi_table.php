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
        Schema::create('kesehatan_gigi', function (Blueprint $table) {
            $table->id('id_kesehatan_gigi');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->integer('jml_gigi')->nullable();
            $table->integer('jml_gigi_berlubang')->nullable();
            $table->enum('plak', ['Ada', 'Tidak Ada'])->nullable();
            $table->enum('risiko_berlubang', ['Tinggi', 'Sedang', 'Rendah'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_gigi');
    }
};
