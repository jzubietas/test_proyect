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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // Nombre
            $table->string('last_name'); // Apellido Paterno
            $table->string('middle_name')->nullable(); // Apellido Materno
            $table->date('birth_date'); // Fecha de Nacimiento
            $table->string('gender'); // Género
            $table->string('curp')->unique(); // CURP
            $table->string('address'); // Dirección
            $table->string('city'); // Ciudad
            $table->string('state'); // Estado
            $table->string('postal_code'); // Código Postal
            $table->string('phone')->nullable(); // Teléfono del alumno
            $table->string('email')->nullable(); // Correo electrónico del alumno
            $table->unsignedBigInteger('grade_id'); // Relación con grado académico
            $table->timestamps();

            // Llave foránea
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
