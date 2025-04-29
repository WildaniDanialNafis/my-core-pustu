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
        Schema::create('keterangan_lahir', function (Blueprint $table) {
            $table->id('id_keterangan_lahir');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->string('no', 255)->nullable();
            $table->dateTime('tanggal')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->enum('jenis_kelahiran', ['Tunggal','Kembar 2', 'Kembar 3', 'Lainnya'])->nullable();
            $table->string('keterangan_jenis_kelahiran',255)->nullable();
            $table->integer('anak_ke')->nullable();
            $table->integer('usia_gestasi')->nullable();
            $table->double('berat_lahir')->nullable();
            $table->double('panjang_badan')->nullable();
            $table->double('lingkar_kepala')->nullable();
            $table->enum('di', ['Rumah Sakit', 'Puskesmas', 'Rumah Bersalin', 'Praktik Mandiri Bidan', 'Lainnya'])->nullable();
            $table->string('keterangan_di', 255)->nullable();
            $table->text('alamat_anak')->nullable();
            $table->string('diberi_nama', 255)->nullable();
            $table->string('nama_ibu', 255)->nullable();
            $table->integer('umur')->nullable();
            $table->string('nik_ibu', 255)->nullable();
            $table->string('nama_ayah', 255)->nullable();
            $table->string('nik_ayah', 255)->nullable();
            $table->string('pekerjaan', 255)->nullable();
            $table->text('alamat_ortu')->nullable();
            $table->string('kecamatan', 255)->nullable();
            $table->string('kabupaten', 255)->nullable();
            $table->dateTime('tanggal_keterangan_lahir')->nullable();
            $table->string('paraf_saksi1', 255)->nullable();
            $table->string('nama_saksi1', 255)->nullable();
            $table->string('paraf_saksi2', 255)->nullable();
            $table->string('nama_saksi2', 255)->nullable();
            $table->string('paraf_penolong_persalinan', 255)->nullable();
            $table->string('nama_penolong_persalinan', 255)->nullable();
            $table->string('fasilitas_kesehatan', 255)->nullable();
            $table->string('ttd', 255)->nullable();
            $table->string('stempel', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_lahir');
    }
};
