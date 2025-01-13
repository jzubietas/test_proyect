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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id'); // Relación con alumnos
            $table->text('allergies')->nullable(); // Alergias
            $table->text('chronic_diseases')->nullable(); // Enfermedades crónicas
            $table->text('medications')->nullable(); // Medicamentos
            $table->string('emergency_contact_name'); // Nombre del contacto de emergencia
            $table->string('emergency_contact_relationship'); // Relación con el alumno
            $table->string('emergency_contact_phone'); // Teléfono del contacto de emergencia
            $table->string('insurance')->nullable(); // Seguro médico
            $table->string('policy_number')->nullable(); // Número de póliza
            $table->timestamps();

            // Llave foránea
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicalrecords');
    }
};
