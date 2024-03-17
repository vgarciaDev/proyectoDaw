@extends('templates.template')

@section('title') Empleados @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/template_erp.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
    <link rel="stylesheet" href="{{ asset('css/smart-webcomponents/smart.default.css') }}">
@endsection
    


@section('content')
    <div class="seccion_erp">

        <p class="frase">BIENVENIDO A TU PERFIL DE USUARIO</p>

        <div class="row">
            <!--COLUMNA DATOS DEL EMPLEADO-->
            <div class="col-3 usuario">
                <img class="img-usuario" src="{{ asset('img/inicio/imagen_usuario.png') }}" alt="Imagen">
                <p class="nombres"><i class="fa-solid fa-user"></i> Gustavo Tejera Martínes</p>

                <!--CONTENEDOR SECCIONES-->
                <div>

                    <!--BOTON FICHAR-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-clock" id="fichaje"></i> Fichaje</p>
                    </div>

                    <!--BOTON VACACIONES-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-umbrella-beach" id="vacaciones"></i> Vacaciones</p>
                    </div>

                    <!--BOTON NOMINAS-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-file-pdf" id="nominas"></i> Nominas</p>
                    </div>

                     <!--BOTON CURSOS-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-book" id="cursos"></i> Cursos</p>
                    </div>


                    

                </div>
                
            </div>
            

            <!--COLUMNA VIEW DATOS-->
            <div class="col-9 info">
                @yield('menuElegido')
            </div>
        </div>
       
    </div>


    
@endsection
