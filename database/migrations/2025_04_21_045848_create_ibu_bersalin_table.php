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
        Schema::create('ibu_bersalin', function (Blueprint $table) {
            $table->id('id_ibu_bersalin');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->dateTime('tanggal_bersalin')->nullable();
            $table->integer('umur_kehamilan')->nullable();
            $table->enum('penolong_persalinan', ['SpOg', 'Dokter Umum', 'Bidan'])->nullable();
            $table->text('keterangan_penolong_persalinan')->nullable();
            $table->enum('cara_persalinan', ['Normal', 'Tindakan'])->nullable();
            $table->text('keterangan_cara_persalinan')->nullable();
            $table->enum('keadaan_ibu', ['Sehat','Pendarahan', 'Demam', 'Kejang', 'Lokhia Berbau', 'Lain-lain', 'Meniggal'])->nullable();
            $table->text('keterangan_keadaan_ibu')->nullable();
            $table->text('kb_pasca_persalinan')->nullable();
            $table->text('keterangan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_bersalin');
    }
};
