<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Bootstrap 4 CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-white text-center">
                    <h4><i class="fas fa-user-plus"></i> Registrarse</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="fas fa-user"></i> Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingrese su nombre completo" required>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Correo Electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fas fa-lock"></i> Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese una contraseña segura" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation"><i class="fas fa-lock"></i> Confirmar Contraseña</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme su contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">
                            <i class="fas fa-user-check"></i> Registrarse
                        </button>
                    </form>
                    @if($errors->any())
                        <div class="alert alert-danger mt-3">
                            @foreach($errors->all() as $error)
                                <p class="mb-0">{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="card-footer text-center">
                    <small>¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 4 JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
