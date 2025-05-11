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
        Schema::create('bayi_baru_lahir', function (Blueprint $table) {
            $table->id('id_bayi_baru_lahir');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->enum('kn', ['0', '1', '2', '3'])->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->string('tempat')->nullable();
            $table->string('perawatan_tali_pusat', 255)->nullable();
            $table->string('imd',255)->nullable();
            $table->string('vitamin_k1',255)->nullable();
            $table->string('imunisasi_hepatitis_b',255)->nullable();
            $table->enum('jenis_salep', ['Salep', 'Tetes Mata Antibiotik'])->nullable();
            $table->string('salep', 255)->nullable();
            $table->enum('jenis_skrining', ['Skrining BBL', 'SHK'])->nullable();
            $table->string('status_skrining', 255)->nullable();
            $table->string('kie', 255)->nullable();
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
        Schema::dropIfExists('bayi_baru_lahir');
    }
};
