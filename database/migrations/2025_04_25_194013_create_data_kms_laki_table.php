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
        Schema::create('data_kms_laki', function (Blueprint $table) {
            $table->id('id_data_kms_laki');
            $table->foreignId('id_kms_laki')->constrained('kms_laki', 'id_kms_laki')->onDelete('cascade');
            $table->integer('umur')->nullable();
            $table->dateTime('bulan_penimbangan')->nullable();
            $table->double('bb')->nullable();
            $table->double('kbm')->nullable();
            $table->enum('n_t', ['N','T'])->nullable();
            $table->string('asi_eksklusif', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kms_laki');
    }
};
