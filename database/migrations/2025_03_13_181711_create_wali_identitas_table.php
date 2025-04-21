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
        Schema::create('wali', function (Blueprint $table) {
            $table->id('id_wali');
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            // $table->foreignId('id_status_wali')->nullable()->constrained('status_wali', 'id_status_wali')->onDelete('set null');
            $table->string('nama', 255)->nullable();
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
            $table->string('pendidikan', 100)->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('email', 255)->unique()->nullable();
            $table->timestamps();

            $table->index('nik');
            $table->index('telepon');
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali');
    }
};
