@extends('templates.template')

@section('title') Empleados @endsection


@section('content')
<div class="container-fluid fs-5">
    <!--inicio contenedor general-->
    <div class="row">

        <div class="container text-center">
            <img class="img-logo" src="{{ asset('img/Logo.png') }}" alt="Imagen">
        </div>

        <div class="container-fluid">
            <!--LADO IZQUIERDO-->
            <div class="row">
                <div class="col-3">

                    <img class="img-usuario" src="{{ asset('img/inicio/imagen_usuario.png') }}" alt="Imagen">
                    <p class="nombres"><i class="fa-solid fa-user"></i> Gustavo Tejera Martínes</p>
                    <!--INICIO SECCIÓN DE BOTONES-->
                    <!--boton 1-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-clock" id="fichaje"></i> Fichaje</p>
                    </div>
                    <!--boton 2-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-umbrella-beach" id="vacaciones"></i> Vacaciones</p>
                    </div>
                    <!--boton 3-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-file-pdf" id="nominas"></i> Nominas</p>
                    </div>
                    <!--boton 4-->
                    <div class="seccion">
                        <p style="cursor: pointer"><i class="fa-solid fa-book" id="cursos"></i> Cursos</p>
                    </div>

                </div>

                

                <!--INICIO SECCION MOSTRAR INFORMACIÓN-->
                <div class="col-9 info">

                </div>
                <!--FIN SECCION MOSTRAR INFORMACIÓN-->
            </div>



        </div>
                
    </div>
</div>

    <!--fin contenedor general-->

@endsection

