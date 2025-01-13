<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'allergies',
        'chronic_diseases',
        'medications',
        'emergency_contact_name',
        'emergency_contact_relationship',
        'emergency_contact_phone',
        'insurance',
        'policy_number',
    ];

    // Relación con la tabla students (uno a uno)
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
