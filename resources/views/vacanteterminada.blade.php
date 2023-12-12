<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
        <title>Modalidad</title>
        <style>
            body {
                background: #f1f1f1;
            }

            .barra {
                background: #00ADEF;
                padding: 15px;
                margin: 0;
            }

            .perfil {
                color: white;
            }

            .perfil:focus {
                background: #23ae6b;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.568);
            }

            .cerrar:hover {
                background-color: rgba(206, 65, 22, 0.877);
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.568);
            }

            .user {
                font-size: 35px;
            }

            .barra-lateral {
                background: #252121;
                color: #fff;
                min-width: 250px;
                min-height: 100vh;
                padding: 0;
            }

            .barra-lateral a {
                color: #fff;
            }

            .barra-lateral .menu a {
                display: block;
                padding: 20px;
                font-family: Roboto, sans-serif;
                font-weight: 500;
                border-bottom: 1px solid rgba(255, 255, 255, .1);
            }

            .barra-lateral .menu a:hover {
                background-color: #003C5D;
                text-decoration: none;
            }

            .active {
                background: #003C5D;
            }

            .barra-lateral .menu {
                border-top: 5px #fff solid;
            }

            .barra-lateral .menu a i {
                margin-right: 20px;
            }

            .main {
                padding-top: 40px;
            }

            .main .columna {
                padding-left: 40px;
                padding-right: 40px;
            }

            .competencias-select {
                width: 100%; /* Ajusta la altura según tus necesidades */
            }
        </style>
    </head>
    <body class="body">
        @include('menu')

                <main class="main col">
                    <div class="row ">
                        <div class="columna col-lg-8">
                            <h3>Encuentra al candidato ideal</h3>
                            <br>
                            <h5>Felicidades, tu vacante está terminada, da clic en el
                                botón para "conectar" con las agencias que tienen
                                a tu candidato ideal</h5><br>
                                <!-- Botones de Volver y Terminar -->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" style="background-color: rgb(22, 234, 201); border-color: rgb(22, 234, 201);">Conectar</button>
                                </div>
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