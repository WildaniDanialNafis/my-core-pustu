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
        Schema::create('pelayanan_sdidtk', function (Blueprint $table) {
            $table->id('id_pelayanan_sdidtk');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->foreignId('id_penyimpangan_pertumbuhan')->constrained('penyimpangan_pertumbuhan', 'id_penyimpangan_pertumbuhan')->onDelete('cascade');
            $table->foreignId('id_penyimpangan_perkembangan')->constrained('penyimpangan_perkembangan', 'id_penyimpangan_perkembangan')->onDelete('cascade');
            $table->foreignId('id_penyimpangan_emosional')->constrained('penyimpangan_emosional', 'id_penyimpangan_emosional')->onDelete('cascade');
            $table->integer('umur')->nullable();
            $table->text('tindakan')->nullable();
            $table->dateTime('kunjungan_ulang')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelayanan_sdidtk');
    }
};
