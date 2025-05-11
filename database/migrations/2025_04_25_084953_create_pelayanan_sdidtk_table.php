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
            $table->foreignId('id_umur_sdidtk')->constrained('umur_sdidtk', 'id_umur_sdidtk')->onDelete('cascade');
            $table->text('tindakan')->nullable();
            $table->text('kunjungan_ulang')->nullable();
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
