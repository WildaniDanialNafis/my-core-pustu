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
        Schema::create('anak_balita', function (Blueprint $table) {
            $table->id('id_anak_balita');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->enum('tipe', ['0-1', '1-2', '2-3', '3-4', '4-5'])->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->string('tempat')->nullable();
            $table->double('bb')->nullable();
            $table->double('pb')->nullable();
            $table->double('lk')->nullable();
            $table->string('perkembangan', 255)->nullable();
            $table->string('kie', 255)->nullable();
            $table->string('imunisasi', 255)->nullable();
            $table->string('vit_a', 255)->nullable();
            $table->string('obat_cacing', 255)->nullable();
            $table->string('ppia1', 255)->nullable();
            $table->string('ppia2', 255)->nullable();
            $table->string('ppia3', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_balita');
    }
};
