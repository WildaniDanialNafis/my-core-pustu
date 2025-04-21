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
        Schema::create('usg_tri3', function (Blueprint $table) {
            $table->id('id_usg_tri3');
            $table->foreignId('id_pemeriksaan_trimester3')->constrained('pemeriksaan_trimester3', 'id_pemeriksaan_trimester3')->onDelete('cascade');
            $table->dateTime('hpht')->nullable();
            $table->integer('kehamilan')->nullable();
            $table->enum('janin', ['Hidup', 'Tidak Hidup'])->nullable();
            $table->double('bpd')->nullable();
            $table->enum('jumlah_janin', ['Tunggal', 'Ganda'])->nullable();
            $table->double('hc')->nullable();
            $table->enum('letak_janin', ['Presentasi Kepala', 'Presentasi Sungsang', 'Presentasi Melintang'])->nullable();
            $table->double('berat_janin')->nullable();
            $table->double('fl')->nullable();
            $table->enum('plasenta', ['Normal', 'Tidak Normal'])->nullable();
            $table->double('cairan_ketuban')->nullable();
            $table->integer('usia_kehamilan')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usg_tri3');
    }
};
