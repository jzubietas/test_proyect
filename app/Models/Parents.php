<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $table='parents';

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'relationship',
        'phone',
        'email',
        'occupation',
        'address',
    ];

    // Relación con los alumnos (muchos a muchos)
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_parent');
    }
}
