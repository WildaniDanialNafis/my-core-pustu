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
        Schema::create('anak_keterangan_lahir', function (Blueprint $table) {
            $table->id('id_anak_keterangan_lahir');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->string('no_keterangan_lahir', 255)->nullable()->unique();
            $table->dateTime('tgl_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->enum('jenis_kelahiran', ['Tunggal', 'Kembar 2', 'Kembar 3', 'Lainnya'])->nullable();
            $table->string('jenis_kelahiran_lainnya', 255)->nullable();
            $table->integer('usia_gestasi')->nullable();
            $table->integer('berat_lahir')->nullable();
            $table->integer('panjang_badan')->nullable();
            $table->integer('lingkar_kepala')->nullable();
            $table->enum('lahir_di', ['Rumah Sakit', 'Puskesmas', 'Rumah Bersalin', 'Praktik Mandiri Bidan', 'Lainnya'])->nullable();
            $table->string('lahir_di_lainnya', 255)->nullable();
            $table->string('diberi_nama', 255)->nullable();
            $table->string('nama_ibu', 255)->nullable();
            $table->char('nik_ibu', 16)->nullable()->index();
            $table->string('nama_ayah', 255)->nullable();
            $table->char('nik_ayah', 16)->nullable()->index();
            $table->string('pekerjaan', 255)->nullable();
            $table->string('provinsi', 255)->nullable();
            $table->string('kabupaten', 255)->nullable();
            $table->string('kecamatan', 255)->nullable();
            $table->text('alamat')->nullable();
            $table->string('tempat_ttd', 255)->nullable();
            $table->date('tgl_ttd')->nullable();
            $table->timestamps();

            $table->index(['nik_ibu', 'nik_ayah', 'no_keterangan_lahir']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_keterangan_lahir');
    }
};
