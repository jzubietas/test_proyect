@extends('layouts.dashboard')

@section('content')
<div class="container">
    <h2 class="mb-4">Lista de Alumnos</h2>
    <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Registrar Nuevo Alumno</a>
    <table id="students-table" class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Grado</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody></tbody>  <!-- Asegúrate de que esta sección esté vacía inicialmente -->
    </table>
</div>
@endsection

@push('scripts')

<script>
    $(document).ready(function() {
        
        $('#students-table').DataTable({
            processing: true,
            serverSide: true,
            searching: true,
            ajax: {
                url: '{{ route('students.data') }}',  // Ruta de la solicitud AJAX
                type: 'GET',  // Asegúrate de que el tipo de solicitud es GET
                dataType: 'json',  // La respuesta esperada es JSON
            },
            columns: [
                { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                { data: 'full_name', name: 'full_name' },
                { data: 'grade_name', name: 'grade_name' },
                { data: 'phone', name: 'phone' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endpush
