<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Iniciar Sesión - GestionaTI</title>
</head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <!-- Columna con imagen de fondo desde la esquina superior izquierda -->
                <div class="col-md-9" style="background-image: url('{{ asset('storage/img/portadaGTI.png') }}'); background-size: 100% 100%; height: 100vh;">
                    <!-- Contenido dentro de la columna -->
                </div>

                <!-- Formulario a la derecha -->
                <div class="col-md-3 d-flex align-items-center">
                    <div class="container">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="text-center mb-4">
                                <h2 class="font-weight-bold text-3xl text-gray-500">Bienvenido a GestionaTI</h2>
                                <p class="mt-2">¡Crea una cuenta para comenzar!</p>
                            </div>

                            <div class="form-group">
                                <label for="email" class="font-weight-bold">Email</label>
                                <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" style="border-color: rgb(22, 234, 201); background-color: rgba(22, 234, 201, 0.1);">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password" class="font-weight-bold">Contraseña</label>
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" style="border-color: rgb(22, 234, 201); background-color: rgba(22, 234, 201, 0.1);">
                                @error('password')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password_verification" class="font-weight-bold">Verificar Contraseña</label>
                                <input id="password_verification" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" style="border-color: rgb(22, 234, 201); background-color: rgba(22, 234, 201, 0.1);">
                                @error('password_confirmation')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" id="terms" required>
                                    <label class="form-check-label" for="terms">
                                        Acepto los términos y condiciones
                                    </label>
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);">Crear</button>
                                <a href="{{ route('login') }}" class="text-info">¿Ya tienes una cuenta?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
