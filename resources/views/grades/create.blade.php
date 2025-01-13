@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Registrar Grado Académico</h2>
    <form action="{{ route('grades.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Grado</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="level">Nivel Educativo</label>
            <input type="text" class="form-control" id="level" name="level" required>
        </div>
        <div class="form-group">
            <label for="shift">Turno</label>
            <select class="form-control" id="shift" name="shift" required>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
@endsection
