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
        Schema::create('amanat_kendaraan', function (Blueprint $table) {
            $table->id('id_amanat_kendaraan');
            $table->foreignId('id_menyambut_persalinan')->constrained('menyambut_persalinan', 'id_menyambut_persalinan')->onDelete('cascade');
            $table->enum('kendaraan', ['Kendaraan', 'Ambulan Desa'])->nullable();
            $table->string('nama', 255)->nullable();
            $table->string('hp',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amanat_kendaraan');
    }
};
