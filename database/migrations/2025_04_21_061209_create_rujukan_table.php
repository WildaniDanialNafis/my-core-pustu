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
        Schema::create('rujukan', function (Blueprint $table) {
            $table->id('id_rujukan');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->text('rujukan')->nullable();
            $table->dateTime('tanggal_umpan_balik')->nullable();
            $table->text('diagnosis_akhir_balik')->nullable();
            $table->text('resume_umpan_balik')->nullable();
            $table->enum('anjuran', ['FKTP', 'FKRTL'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rujukan');
    }
};
