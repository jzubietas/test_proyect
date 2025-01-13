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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // Nombre del padre/tutor
            $table->string('last_name'); // Apellido paterno
            $table->string('middle_name')->nullable(); // Apellido materno
            $table->string('relationship'); // Relación con el alumno (Padre, Madre, Tutor, etc.)
            $table->string('phone'); // Teléfono
            $table->string('email'); // Correo electrónico
            $table->string('occupation')->nullable(); // Ocupación
            $table->string('address')->nullable(); // Dirección
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
