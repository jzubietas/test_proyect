@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Lista de Grados Académicos</h2>
    <a href="{{ route('grades.create') }}" class="btn btn-success mb-3">Registrar Nuevo Grado</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre del Grado</th>
                <th>Nivel Educativo</th>
                <th>Turno</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($grades as $grade)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $grade->name }}</td>
                <td>{{ $grade->level }}</td>
                <td>{{ $grade->shift }}</td>
                <td>
                    <a href="{{ route('grades.edit', $grade->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('grades.destroy', $grade->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
