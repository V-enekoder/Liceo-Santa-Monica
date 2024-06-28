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
        Schema::create('Telefonos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('representante_id')->constrained('Representantes')->onDelete('cascade');
            $table->string('Telefono');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Telefonos');
    }
};
