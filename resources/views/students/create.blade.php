@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Registrar Alumno</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <!-- Nombre -->
        <div class="form-group">
            <label for="first_name">Nombre</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <!-- Apellidos -->
        <div class="form-group">
            <label for="last_name">Apellido Paterno</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="middle_name">Apellido Materno</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name">
        </div>
        <!-- Fecha de Nacimiento -->
        <div class="form-group">
            <label for="birth_date">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" required>
        </div>
        <!-- Género -->
        <div class="form-group">
            <label for="gender">Género</label>
            <select class="form-control" id="gender" name="gender" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <!-- CURP -->
        <div class="form-group">
            <label for="curp">CURP</label>
            <input type="text" class="form-control" id="curp" name="curp" required>
        </div>
        <!-- Dirección -->
        <div class="form-group">
            <label for="address">Dirección</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <!-- Grado Académico -->
        <div class="form-group">
            <label for="grade_id">Grado Académico</label>
            <select class="form-control" id="grade_id" name="grade_id" required>
                @foreach($grades as $grade)
                <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                @endforeach
            </select>
        </div>
        <!-- Teléfono -->
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <!-- Correo Electrónico -->
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <!-- Botón -->
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
