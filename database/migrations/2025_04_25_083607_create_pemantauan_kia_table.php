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
        Schema::create('pemantauan_kia', function (Blueprint $table) {
            $table->id('id_pemantauan_kia');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->foreignId('id_ceklis')->constrained('ceklis', 'id_ceklis')->onDelete('cascade');
            $table->enum('hasil_pemantauan', ['Lengkap', 'Tidak Lengkap'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemantauan_kia');
    }
};
