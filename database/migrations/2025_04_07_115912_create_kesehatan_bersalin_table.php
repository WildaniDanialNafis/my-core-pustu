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
        Schema::create('kesehatan_bersalin', function (Blueprint $table) {
            $table->id('id_kesehatan_bersalin');
            $table->foreignId('id_ibu')->constrained('ibu', 'id_ibu')->onDelete('cascade');
            $table->string('taksiran_persalinan', 255)->nullable();
            $table->string('fasyankes', 255)->nullable();
            $table->string('rujukan', 255)->nullable();
            $table->text('inisiasi_menyusui_dini')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatan_bersalin');
    }
};
