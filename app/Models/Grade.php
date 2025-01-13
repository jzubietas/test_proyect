<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'shift',
    ];

    // Relación con la tabla students (uno a muchos)
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}

