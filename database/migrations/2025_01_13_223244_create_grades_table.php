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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del grado (e.g., "Primaria 1°", "Secundaria 2°")
            $table->string('level'); // Nivel educativo (Primaria, Secundaria, etc.)
            $table->string('shift'); // Turno (Matutino, Vespertino)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
