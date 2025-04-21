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
        Schema::create('minum_ttd', function (Blueprint $table) {
            $table->id('id_minum_ttd');
            $table->foreignId('id_kontrol_ttd')->constrained('kontrol_ttd', 'id_kontrol_ttd')->onDelete('cascade');
            $table->enum('bulan_ke', ['1', '2', '3', '4', '5', '6', '7', '8', '9']);
            $table->string('keterangan', 255)->nullable();
            $table->enum('nama_bulan', ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minum_ttd');
    }
};
