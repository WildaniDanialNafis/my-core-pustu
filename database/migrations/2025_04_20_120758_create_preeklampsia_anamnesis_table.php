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
        Schema::create('preeklampsia_anamnesis', function (Blueprint $table) {
            $table->id('id_preeklampsia_anamnesis');
            $table->foreignId('id_skrining_preeklampsia')->constrained('skrining_preeklampsia', 'id_skrining_preeklampsia')->onDelete('cascade');
            $table->foreignId('id_kriteria_anamnesis')->constrained('kriteria_anamnesis', 'id_kriteria_anamnesis')->onDelete('cascade');
            $table->enum('risiko', ['', 'Risiko sedang', 'Risiko tinggi'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preeklampsia_anamnesis');
    }
};
