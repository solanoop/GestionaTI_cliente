<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css')}}">
    <title>Perfil</title>
</head>
    <body class="body">
        @include('menu')

                <main class="main col">
                    <div class="row ">
                        <div class="columna col-lg-8">
                            <h3>Crea tu Vacante</h3>
                            <br>
                            <h5>¡Cuéntanos un poco sobre la vacante que quieres publicar!</h5><br>
                            <form action="{{ url('/modalidad') }}" method="post">
                                @csrf
                                <!-- Tipo de perfil que estás buscando -->
                                <div class="form-group">
                                    <label for="perfiles">Perfiles Requeridos:</label>
                                    <select class="select2 competencias-select" id="perfiles" name="perfiles[]" multiple="multiple" required>
                                        @foreach($perfiles as $perfil)
                                            <option value="{{ $perfil->id }}">{{ $perfil->skill }} - {{ $perfil->descripcion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                
                                <!-- Competencias requeridas -->
                                <div class="form-group">
                                    <label for="competencias">Competencias Requeridas:</label>
                                    <select class="select2 competencias-select" id="competencias" name="competencias[]" multiple="multiple" required>
                                        <optgroup label="Lenguajes de Programación">
                                            @foreach($lenguajes as $lenguaje)
                                                <option value="{{ $lenguaje->id }}">{{ $lenguaje->skill }} - {{ $lenguaje->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Frameworks">
                                            @foreach($frameworks as $framework)
                                                <option value="{{ $framework->id }}">{{ $framework->skill }} - {{ $framework->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Librerias">
                                            @foreach($librerias as $librerias)
                                                <option value="{{ $librerias->id }}">{{ $librerias->skill }} - {{ $librerias->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Bases De Datos">
                                            @foreach($basesDeDatos as $basesDeDatos)
                                                <option value="{{ $basesDeDatos->id }}">{{ $basesDeDatos->skill }} - {{ $basesDeDatos->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Herramientas De Desarrollo">
                                            @foreach($herramientas as $herramientas)
                                                <option value="{{ $herramientas->id }}">{{ $herramientas->skill }} - {{ $herramientas->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Sistemas De Control De Versiones">
                                            @foreach($controlVersiones as $controlVersiones)
                                                <option value="{{ $controlVersiones->id }}">{{ $controlVersiones->skill }} - {{ $controlVersiones->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Gestion De Proyectos Y Colaboracion">
                                            @foreach($gestionProyectos as $gestionProyectos)
                                                <option value="{{ $gestionProyectos->id }}">{{ $gestionProyectos->skill }} - {{ $gestionProyectos->descripcion }}</option>
                                            @endforeach
                                        </optgroup>

                                        <optgroup label="Otros">
                                            @foreach($otros as $otros)
                                                <option value="{{ $otros->id }}">{{ $otros->skill }} - {{ $otros->descripcion }}</option>
                                            @endforeach
                                        </optgroup>
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
