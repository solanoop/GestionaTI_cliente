<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>descripcionpuesto</title>
</head>
    <body class="body">
        @include('menu')

                <main class="main col">
                    <div class="row ">
                        <div class="columna col-lg-8">
                            <h3>Crea tu Vacante</h3>
                            <br>
                            <h5>¡Cuéntanos un poco sobre la vacante que quieres publicar!</h5><br>
                            <form method="post" action="{{ url('/perfil') }}" >
                                @csrf
                                <!-- Campo para elegir el nivel de experiencia -->
                                <div class="form-group">
                                    <label for="nivel_experiencia">Nivel de Experiencia Requerido:</label>
                                    <select class="form-control" id="nivel_experiencia" name="nivel_experiencia" required>
                                        @foreach($nivelesExperiencia as $nivel)
                                            <option value="{{ $nivel->id }}">{{ $nivel->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                                <!-- Requisitos académicos (opcional) -->
                                <div class="form-group">
                                    <label for="requisito_academico">Requisito Académico (opcional):</label>
                                    <select class="select2 competencias-select" id="prestaciones" name="prestaciones[]" multiple="multiple">
                                        <option value="bachiller">Bachiller</option>
                                        <option value="licenciatura">Licenciatura</option>
                                        <option value="maestria">Maestría</option>
                                        <option value="doctorado">Doctorado</option>
                                    </select>
                                </div>
                
                                <!-- Botones de Volver y Siguiente -->
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
