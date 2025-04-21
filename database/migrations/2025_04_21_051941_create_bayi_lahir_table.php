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
        Schema::create('bayi_lahir', function (Blueprint $table) {
            $table->id('id_bayi_lahir');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->integer('anak_ke')->nullable();
            $table->double('berat_lahir')->nullable();
            $table->double('panjang_badan')->nullable();
            $table->double('lingkar_kepala')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan', 'Tidak Bisa Ditentukan'])->nullable();
            $table->enum('kondisi_bayi', ['Segera menangis','Menangis beberapa saat', 'Tidak menangis', 'Seluruh tubuh kemerahan', 'Anggota gerak kebiruan', 'Seluruh tubuh biru', 'Kelainan bawaan', 'Meninggal'])->nullable();
            $table->text('keterangan_kondisi_bayi')->nullable();
            $table->enum('asuhan_bayi', ['Inisiasi menyusu dini (IMD) dalam 1 jam pertama kelahiran bayi','Suntikan vitamin K1', 'Salep mata antibiotika profilaksis', 'Imunisasi HB0'])->nullable();
            $table->text('keterangan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayi_lahir');
    }
};
