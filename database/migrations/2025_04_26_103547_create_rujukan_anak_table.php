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
        Schema::create('rujukan_anak', function (Blueprint $table) {
            $table->id('id_rujukan_anak');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->dateTime('tanggal')->nullable();
            $table->string('dirujuk_ke', 255)->nullable();
            $table->text('sebab_dirujuk')->nullable();
            $table->text('diagnosis_sementara')->nullable();
            $table->text('tindakan_sementara')->nullable();
            $table->string('nama_yang_merujuk', 255)->nullable();
            $table->string('paraf_yang_merujuk', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rujukan_anak');
    }
};
