<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>descripcionVacante</title>
</head>
    <body class="body">
        <!-- Se agrega el menú -->
	    @include('menu')

                <main class="main col">
                    <div class="row ">
                        <div class="columna col-lg-8">
                            <h3>Crea tu Vacante</h3>
                            <br>
                            <h5>¡Cuéntanos un poco sobre la vacante que quieres publicar!</h5><br>
                            <form method="POST" action="{{ url('/puesto') }}">
                                @csrf
        
                                <!-- Campo para la descripción de responsabilidades -->
                                <div class="form-group">
                                    <label for="responsabilidades">Responsabilidades del Puesto:</label>
                                    <textarea name="responsabilidades" class="form-control" rows="5" required></textarea>
                                </div>
        
                                <!-- Campo para la descripción de funciones -->
                                <div class="form-group">
                                    <label for="funciones">Funciones del Puesto:</label>
                                    <textarea name="funciones" class="form-control" rows="5" required></textarea>
                                </div>
        
                                <div class="form-group">
                                    <button type="button" class="btn btn-secondary" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);" onclick="window.history.back()">Volver</button>
                                    <button type="submit" class="btn btn-primary" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);">Siguiente</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/646c794df3.js"></script>
    </body>
</html>
