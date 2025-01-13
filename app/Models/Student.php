<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'gender',
        'curp',
        'address',
        'city',
        'state',
        'postal_code',
        'phone',
        'email',
        'grade_id',
    ];

    // Relación con la tabla grades (muchos a uno)
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    // Relación con los padres (muchos a muchos)
    public function parents()
    {
        return $this->belongsToMany(Parent::class, 'student_parent');
    }

    // Relación con los registros médicos (uno a uno)
    public function medicalRecord()
    {
        return $this->hasOne(MedicalRecord::class);
    }
}
