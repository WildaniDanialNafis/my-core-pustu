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
        Schema::create('menyambut_persalinan', function (Blueprint $table) {
            $table->id('id_menyambut_persalinan');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->string('nama_pembuat', 255)->nullable();
            $table->text('alamat')->nullable();
            $table->string('perkiraan_bulan_lahir')->nullable();
            $table->string('perkiraan_tahun_lahir')->nullable();
            $table->enum('dana_persalinan', ['Disiapkan Sendiri', 'Ditanggung JKN', 'JAMPERSAL'])->nullable();
            $table->string('dibantu_oleh', 255)->nullable();
            $table->string('metode_kontrasepsi', 255)->nullable();
            $table->string('golongan_darah', 5)->nullable();
            $table->string('rhesus', 5)->nullable();
            $table->enum('bersedia_dirujuk', ['risiko', 'komplikasi', 'kegawatdaruratan'])->nullable();
            $table->datetime('tanggal')->nullable();
            $table->enum('persetujuan', ['Suami', 'Orang Tua', 'Keluarga'])->nullable();
            $table->string('paraf_persetujuan', 255)->nullable();
            $table->string('nama_persetujuan', 255)->nullable();
            $table->string('paraf_bumil', 255)->nullable();
            $table->string('nama_bumil', 255)->nullable();
            $table->enum('nakes', ['Bidan', 'Dokter'])->nullable();
            $table->string('paraf_nakes', 255)->nullable();
            $table->string('nama_nakes', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menyambut_persalinan');
    }
};
