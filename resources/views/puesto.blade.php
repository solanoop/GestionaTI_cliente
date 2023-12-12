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
        <!-- Se agrega el menú -->
        @include('menu')
                <main class="main col">
                    <div class="row ">
                        <div class="columna col-lg-8">
                            <h3>Crea tu Vacante</h3>
                            <br>
                            <h5>¡Cuéntanos un poco sobre la vacante que quieres publicar!</h5><br>
                            <div class="card">
                                <div class="card-header">Puesto</div>
                
                                <div class="card-body">
                                    <form method="POST" action="{{ url('/experienciapuesto') }}">
                                        @csrf
                
                                        <!-- Campo para elegir el puesto -->
                                        <div class="form-group">
                                            <label for="puesto">Selecciona el Puesto:</label>
                                            <select name="puesto" class="form-control" required>
                                                @foreach($puestos as $puesto)
                                                    <option value="{{ $puesto->id }}">{{ $puesto->skill }} - {{ $puesto->descripcion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                
                                        <!-- Campo para elegir el idioma -->
                                        <div class="form-group">
                                            <label for="idiomas">Selecciona el Idioma:</label>
                                            <select class="select2 competencias-select" id="idiomas" name="idiomas[]" multiple="multiple" required>
                                                @foreach($idiomas as $idioma)
                                                    <option value="{{ $idioma->id }}">{{ $idioma->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                
                                        <!-- Campo para años de experiencia -->
                                        <div class="form-group">
                                            <label for="experiencia">Años de Experiencia en el Área de TI:</label>
                                            <div class="input-group">
                                                <i class="fas fa-plus"></i><input type="text" name="experiencia" class="form-control" placeholder="Ingrese los años" required>
                                            </div>
                                        </div>
                
                                        <div class="form-group">
                                            <button type="button" class="btn btn-secondary" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);" onclick="window.history.back()">Volver</button>
                                            <button type="submit" class="btn btn-primary" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);">Siguiente</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
