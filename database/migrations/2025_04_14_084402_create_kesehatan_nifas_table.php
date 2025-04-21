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
        Schema::create('kesehatan_nifas', function (Blueprint $table) {
            $table->id('id_kesehatan_nifas');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->date('tanggal_periksa')->nullable();
            $table->string('tempat', 50)->nullable();
            $table->string('periksa_payudara', 255)->nullable();
            $table->string('periksa_pendarahan', 255)->nullable();
            $table->string('periksa_jalan_lahir', 255)->nullable();
            $table->string('vitamin_a', 255)->nullable();
            $table->string('kb_pasca_persalinan', 255)->nullable();
            $table->string('konseling', 255)->nullable();
            $table->text('test_laksana_kasus')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_nifas');
    }
};
