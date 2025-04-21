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
        Schema::create('anak_berat_badan_lk', function (Blueprint $table) {
            $table->id('id_anak_berat_badan_lk');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->string('nama_anak', 255)->nullable();
            $table->string('nama_posyandu', 255)->nullable();
            $table->decimal('berat_badan', 5, 2)->nullable();
            $table->integer('umur')->nullable();
            $table->dateTime('bulan_penimbangan')->nullable();
            $table->string('kb', 255)->nullable();
            $table->string('n_t', 255)->nullable();
            $table->string('asi_eksklusif', 10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_berat_badan_lk');
    }
};
