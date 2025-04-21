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
        Schema::create('trans_anak_tanggal_imunisasi', function (Blueprint $table) {
            $table->id('id_trans_anak_tanggal_imunisasi');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->foreignId('id_anak_tanggal_imunisasi')->constrained('anak_tanggal_imunisasi', 'id_anak_tanggal_imunisasi')->onDelete('cascade');
            $table->text('jenis_vaksin')->nullable();
            $table->string('paraf_petugas', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trans_anak_tanggal_imunisasi');
    }
};
