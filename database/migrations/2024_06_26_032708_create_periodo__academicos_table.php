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
        Schema::create('Periodos_Academicos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->year('Fecha_inicio')->unique();
            $table->year('Fecha_fin')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Periodos_Academicos');
    }
};
