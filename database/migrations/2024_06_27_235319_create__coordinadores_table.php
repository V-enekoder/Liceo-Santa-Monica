<?php

use App\Models\User;
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
        Schema::create('coordinadores', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->integer('Cedula')->unique();
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Usuario')->unique();
            $table->string('Clave');
            $table->date('Fecha_ingreso');
            $table->date('Fecha_retiro')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coordinadores');
    }
};
