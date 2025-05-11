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
        Schema::create('berat_badan_bumil', function (Blueprint $table) {
            $table->id('id_berat_badan_bumil');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->integer('minggu')->nullable();
            $table->double('berat_badan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berat_badan_bumil');
    }
};
