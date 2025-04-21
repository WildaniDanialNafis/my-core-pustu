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
        Schema::create('pmba', function (Blueprint $table) {
            $table->id('id_nasihat_makan');
            $table->foreignId('id_anak')->constrained('anak', 'id_anak')->onDelete('cascade');
            $table->integer('umur')->nullable();
            $table->text('nasihat')->nullable();
            $table->dateTime('tanggal1')->nullable();
            $table->datetime('tanggal2')->nullable();
            $table->datetime('tanggal3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pmba');
    }
};
