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
        Schema::create('penyimpangan_pertumbuhan', function (Blueprint $table) {
            $table->id('id_penyimpangan_pertumbuhan');
            $table->foreignId('id_pelayanan_sdidtk')->constrained('pelayanan_sdidtk', 'id_pelayanan_sdidtk')->onDelete('cascade');
            $table->enum('bb_u', ['SK', 'K', 'N', 'RBBL'])->nullable();
            $table->enum('bb_tb', ['Gb', 'Gk', 'Gn', 'Gl', 'O'])->nullable();
            $table->enum('tb_u', ['SP', 'P', 'Tn', 'Ti'])->nullable();
            $table->enum('lk_u', ['Mi', 'N', 'Ma'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyimpangan_pertumbuhan');
    }
};
