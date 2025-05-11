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
        Schema::create('ibu', function (Blueprint $table) {
            $table->id('id_ibu');
            $table->foreignId('id_user')->constrained('users', 'id_user')->onDelete('cascade');
            $table->string('nama', 255)->nullable();
            $table->string('pembiayaan', 255)->nullable();
            $table->string('no_jkn', 50)->nullable();
            $table->string('faskes_tk_1', 255)->nullable();
            $table->string('faskes_rujukan', 255)->nullable();
            $table->char('gol_darah', 2)->nullable();
            $table->string('tmpt_lahir', 100)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('pendidikan', 100)->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->string('provinsi', 100)->nullable();
            $table->string('kabupaten', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('puskesmas_domisili', 255)->nullable();
            $table->string('no_reg_kohort_ibu', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu');
    }
};
