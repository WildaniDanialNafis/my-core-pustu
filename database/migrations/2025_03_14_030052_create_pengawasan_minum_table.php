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
        Schema::create('pengawasan_minum', function (Blueprint $table) {
            $table->id('id_pengawasan_minum');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->string('nama_pengontrol', 255)->nullable();
            $table->string('hubungan_dengan_bumil', 255)->nullable();
            $table->integer('bulan_ke')->nullable();
            $table->string('nama_bulan', 20)->nullable();
            $table->string('ttd', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengawasan_minum');
    }
};
