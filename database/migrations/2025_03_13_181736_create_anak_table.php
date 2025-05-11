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
        Schema::create('anak', function (Blueprint $table) {
            $table->id('id_anak');
            $table->foreignId('id_wali')->constrained('wali', 'id_wali')->onDelete('cascade');
            $table->string('nama', 255)->nullable();
            $table->tinyInteger('anak_ke')->unsigned()->nullable();
            $table->string('no_akte_kelahiran', 50)->unique()->nullable();
            $table->char('nik', 16)->unique()->nullable();
            $table->string('tmpt_lahir', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->char('gol_darah', 2)->nullable();
            $table->enum('jenis_pelayanan', ['JKN', 'Asuransi Lain'])->nullable();
            $table->string('no_asuransi', 50)->nullable();
            $table->date('tgl_berlaku_asuransi')->nullable();
            $table->enum('fasilitas_pelayanan_kesehatan', ['primer', 'sekunder'])->nullable();
            $table->string('no_reg_kohort_bayi', 50)->nullable();
            $table->string('no_reg_kohort_balita', 50)->nullable();
            $table->string('no_catatan_medik_rs', 50)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->timestamps();

            $table->index('nik');
            $table->index('telepon');
            $table->index('no_akte_kelahiran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
