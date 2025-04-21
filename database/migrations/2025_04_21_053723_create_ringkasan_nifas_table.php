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
        Schema::create('ringkasan_nifas', function (Blueprint $table) {
            $table->id('id_ringkasan_nifas');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->enum('kf', ['KF1', 'KF2', 'KF3', 'KF4'])->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->string('faskes', 255)->nullable();
            $table->text('klasifikasi')->nullable();
            $table->text('tindakan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ringkasan_nifas');
    }
};
