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
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->integer('Usia');
            $table->integer('Jenis_Kelamin');
            $table->integer('Berat_Badan');
            $table->integer('Tinggi_Badan');
            $table->boolean('IMD');
            $table->enum('Status', ['Gizi_baik', 'Gizi_buruk']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
