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
        Schema::create('ringkasan_mtbs', function (Blueprint $table) {
            $table->id('id_ringkasan_mtbs');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->string('puskesmas', 255)->nullable();
            $table->text('catatan')->nullable();
            $table->dateTime('tanggal_kembali')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ringkasan_mtbs');
    }
};
