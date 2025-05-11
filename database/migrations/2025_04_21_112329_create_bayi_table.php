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
        Schema::create('bayi', function (Blueprint $table) {
            $table->id('id_bayi');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->string('tempat')->nullable();
            $table->double('bb')->nullable();
            $table->double('pb')->nullable();
            $table->double('lk')->nullable();
            $table->string('perkembangan', 255)->nullable();
            $table->string('kie', 255)->nullable();
            $table->string('imunisasi', 255)->nullable();
            $table->string('vit_a', 255)->nullable();
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
        Schema::dropIfExists('bayi');
    }
};
