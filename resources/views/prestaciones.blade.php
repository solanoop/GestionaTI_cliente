<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
        <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
        <title>Modalidad</title>
    </head>
    <body class="body">
        @include('menu')

                <main class="main col">
                    <div class="row ">
                        <div class="columna col-lg-8">
                            <h3>Crea tu Vacante</h3>
                            <br>
                            <h5>¡Elije las prestaciones de tu vacante!</h5><br>
                            <form action="{{ url('/vacanteterminada') }}" method="post">
                                @csrf
                                <!-- Prestaciones -->
                                <div class="form-group">
                                    <label for="prestaciones">Prestaciones:</label>
                                    <select class="select2 competencias-select" id="prestaciones" name="prestaciones[]" multiple="multiple">
                                        @foreach($prestaciones as $prestacion)
                                            <option value="{{ $prestacion->id }}">{{ $prestacion->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <!-- Botones de Volver y Terminar -->
                                <div class="form-group">
                                    <button type="button" class="btn btn-secondary" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);" onclick="window.history.back()">Volver</button>
                                    <button type="submit" class="btn btn-success" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);">Terminar</button>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- Scripts al final del body para mejorar el rendimiento de carga -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <script src="https://kit.fontawesome.com/646c794df3.js"></script>
    
        <!-- Inicializar Select2 -->
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    </body>
</html>