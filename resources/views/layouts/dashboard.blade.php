<!-- resources/views/layouts/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    @stack('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .main-content {
            margin-top: 70px;
            display: flex;
            flex: 1;
        }
        .sidebar-left {
            width: 250px;
            background-color: #343a40;
            color: white;
            padding: 15px;
            height: 100vh;
        }
        .sidebar-left a {
            color: white;
            text-decoration: none;
            display: block;
            margin: 10px 0;
            padding: 10px;
        }
        .sidebar-left a:hover {
            background-color: #495057;
            padding-left: 15px;
        }
        .sidebar-left i {
            margin-right: 10px;
        }
        .aside {
            flex: 1;
            padding: 20px;
            background-color: #f8f9fa;
            margin-right: 10px;
        }
        .sidebar-right {
            width: 250px;
            background-color: #f8f9fa;
            padding: 15px;
            border-left: 1px solid #dee2e6;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #343a40;
            color: white;
            margin-top: auto;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
            </div>
        </div>

        <!-- Main content area -->
        <div class="main-content">
            <!-- Left Sidebar -->
            <div class="sidebar-left">
                <h4>Menú</h4>
                <a href="{{ route('students.index') }}">
                    <i class="fas fa-user-graduate"></i> Alumnos
                </a>
                <a href="{{ route('grades.index') }}">
                    <i class="fas fa-school"></i> Grados Académicos
                </a>
                {{--<a href="{{ route('users.index') }}">
                    <i class="fas fa-users"></i> Usuarios
                </a>--}}
                {{--<a href="{{ route('configurations.index') }}">
                    <i class="fas fa-cogs"></i> Configuraciones
                </a>--}}
                {{--<a href="{{ route('reports.index') }}">
                    <i class="fas fa-chart-line"></i> Reportes
                </a>--}}
            </div>

            <!-- Main content section -->
            <div class="aside">
                @yield('content')  <!-- Contenido central, se puede reemplazar en las vistas -->
            </div>

            <!-- Right Sidebar -->
            <div class="sidebar-right">
                <h5>Sidebar Derecho</h5>
                <p>Contenido adicional aquí.</p>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            &copy; {{ date('Y') }} Mi Aplicación
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    

    @stack('scripts')
    <script>
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'  // URL del archivo JSON de idioma español
            },
            dom: '<"top"flip>rt<"bottom"ip><"clear">',
        });
    </script>

    <script>

        $(document).ready(function () {

            console.log("inicio dashboard")

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });



        });
        
    </script>


</body>
</html>
