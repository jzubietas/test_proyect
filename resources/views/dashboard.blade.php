<!-- resources/views/dashboard.blade.php -->
@extends('layouts.dashboard')

@section('content')
    <h1>Bienvenido al Dashboard</h1>
    <p>¡Has iniciado sesión correctamente!</p>
    <p>Puedes agregar más componentes y secciones según lo necesites.</p>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <a href="{{ route('logout') }}">Cerrar sesión</a>
    
@endsection