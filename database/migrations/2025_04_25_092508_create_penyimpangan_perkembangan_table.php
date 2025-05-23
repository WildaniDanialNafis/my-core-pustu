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
        Schema::create('penyimpangan_perkembangan', function (Blueprint $table) {
            $table->id('id_penyimpangan_perkembangan');
            $table->foreignId('id_pelayanan_sdidtk')->constrained('pelayanan_sdidtk', 'id_pelayanan_sdidtk')->onDelete('cascade');
            $table->enum('kpsp', ['Ds', 'Dm', 'Dp'])->nullable();
            $table->enum('tdd', ['N','R'])->nullable();
            $table->enum('tdl', ['N','R'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyimpangan_perkembangan');
    }
};
