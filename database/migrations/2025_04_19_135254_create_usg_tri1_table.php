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
        Schema::create('usg_tri1', function (Blueprint $table) {
            $table->id('id_usg_tri1');
            $table->foreignId('id_pemeriksaan_trimester1')->constrained('pemeriksaan_trimester1', 'id_pemeriksaan_trimester1')->onDelete('cascade');
            $table->dateTime('hpht')->nullable();
            $table->integer('usia_kehamilan')->nullable();
            $table->double('gestational_sac')->nullable();
            $table->double('crown_rump_length')->nullable();
            $table->integer('denyut_jantung_janin')->nullable();
            $table->integer('sesuai_usia_kehamilan')->nullable();
            $table->enum('letak_janin', ['intrauterin', 'ekstrauterin'])->nullable();
            $table->string('taksiran_persalinan', 255)->nullable();
            $table->string('hasil_usg', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usg_tri1');
    }
};
