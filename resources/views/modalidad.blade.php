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
                            <h5>¡Elije la modalidad de tu vacante!</h5><br>
                            <form action="{{ url('/prestaciones') }}" method="post">
                                @csrf
                                <!-- Modalidad de trabajo -->
                                <div class="form-group">
                                    <label for="modalidad_trabajo">Modalidad de Trabajo:</label>
                                    <select class="form-control" id="modalidad_trabajo" name="modalidad_trabajo" required>
                                        <option value="presencial">Presencial</option>
                                        <option value="hibrido">Híbrido</option>
                                        <option value="online">Online</option>
                                    </select>
                                </div>
                
                                <!-- Ciudad -->
                                <div class="form-group">
                                    <label for="ciudad">Ciudad:</label>
                                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ejemplo: Ciudad de México" required>
                                </div>
                
                                <!-- Rango de sueldo en USD -->
                                <div class="form-group">
                                    <label for="sueldo">Rango de Sueldo en USD:</label>
                                    <input type="text" class="form-control" id="sueldo" name="sueldo" placeholder="Ejemplo: 50000 - 70000" required>
                                </div>
                
                                <!-- Meses de contratación -->
                                <div class="form-group">
                                    <label for="meses_contratacion">Meses de Contratación:</label>
                                    <input type="text" class="form-control" id="meses_contratacion" name="meses_contratacion" placeholder="Ejemplo: 6 - 12" required>
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
