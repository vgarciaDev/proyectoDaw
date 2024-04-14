
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi aplicación')</title>
    <link href="{{ asset('css/template_erp.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/768e9ae614.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('css')
</head>
<body>
    
<div class="container-fluid fs-5">
    <!--inicio contenedor general-->
    <div class="row">

        <div class="container logo text-center">
            <img class="img-logo" src="{{ asset('img/Logo.png') }}" alt="Imagen">
        </div>

        <div class="container-fluid">
            <!--LADO IZQUIERDO-->
            <div class="row">
                <div class="col-3">

                    <img class="img-usuario" src="{{ asset('img/inicio/imagen_usuario.png') }}" alt="Imagen">
                    <p class="nombres"><i class="fa-solid fa-user"></i> Gustavo Tejera Martínes</p>
                    <!--INICIO SECCIÓN DE BOTONES-->
                    <!--boton FICHAR-->
                    <a  href="{{ url('/fichaje') }}"><button  class="seccion pb-3"><i class="fa-solid fa-clock" id="fichaje"></i> Fichaje</button></a>
                    <!--boton VACACIONES-->
                    <a href="{{ url('/vacaciones') }}"><button  class="seccion pb-3"><i class="fa-solid fa-umbrella-beach" id="vacaciones"></i> Vacaciones</button></a>
                    <!--boton NOMINAS-->
                    <a href="{{ url('/nominas') }}"><button  class="seccion pb-3"><i class="fa-solid fa-file-pdf" id="nominas"></i> Nominas</button></a>
                    <!--boton CURSO-->
                    <a href="{{ url('/cursos') }}"><button  class="seccion pb-3"><i class="fa-solid fa-book" id="cursos"></i> Cursos</button></a>
                    <!--boton TRABAJADORES-->
                    <a href="{{ url('/RRHH/empleados') }}"><button  class="seccion pb-3"><i class="fa-solid fa-book" id="cursos"></i> Trabajadores</button></a>
                    <!--boton CANDIDATOS-->
                    <a href="{{ url('/cursos') }}"><button  class="seccion pb-3"><i class="fa-solid fa-book" id="cursos"></i> Candidatos</button></a>

                </div>

                

                <!--INICIO SECCION MOSTRAR INFORMACIÓN-->
                <div class="col-9 info">
                    @yield('content')
                </div>
                <!--FIN SECCION MOSTRAR INFORMACIÓN-->
                
            </div>



        </div>
                
    </div>
</div>

    <!--fin contenedor general-->
    @yield('script')

</body>
</html>
