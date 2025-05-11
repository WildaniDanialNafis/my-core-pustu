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
        Schema::create('penyimpangan_emosional', function (Blueprint $table) {
            $table->id('id_penyimpangan_emosional');
            $table->foreignId('id_pelayanan_sdidtk')->constrained('pelayanan_sdidtk', 'id_pelayanan_sdidtk')->onDelete('cascade');
            $table->enum('kmpe', ['N', 'R'])->nullable();
            $table->enum('m_chat', ['N','R'])->nullable();
            $table->enum('gpph', ['N','R'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyimpangan_emosional');
    }
};
