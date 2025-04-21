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
        Schema::create('menyambut_persalinan2', function (Blueprint $table) {
            $table->id('id_menyambut_persalinan2');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->string('nama', 255)->nullable();
            $table->string('alamat', 255)->nullable();
            $table->dateTime('perkiraan_lahir')->nullable();
            $table->string('penolong_persalinan', 255)->nullable();
            $table->string('dana_persalinan',  255)->nullable();
            $table->string('kendaraan', 255)->nullable();
            $table->string('no_telp_kendaraan', 20)->nullable();
            $table->string('metode_kontrasepsi', 255)->nullable();
            $table->char('gol_darah', 2)->nullable();
            $table->char('rhesus', 10)->nullable();
            $table->string('sumbangan_darah', 255)->nullable();
            $table->string('no_telp_sumbangan', 20)->nullable();
            $table->string('disetujui_oleh', 255)->nullable();
            $table->string('disetujui_ibu', 255)->nullable();
            $table->string('disetujui_dokter', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menyambut_persalinan2');
    }
};
