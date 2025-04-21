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
        Schema::create('beri_vitamin', function (Blueprint $table) {
            $table->id('id_beri_vitamin');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->integer('umur')->nullable();
            $table->dateTime('feb_agu')->nullable();
            $table->dateTime('feb')->nullable();
            $table->dateTime('agu')->nullable();
            $table->dateTime('obat_cacing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beri_vitamin');
    }
};
