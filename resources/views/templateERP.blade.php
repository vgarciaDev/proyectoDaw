@extends('templates.template')

@section('title') Empleados @endsection

@section('content')
    <div class="seccion_erp">

        <div class="row">

            <div class="col-3 usuario">
                <img class="img-usuario" src="{{ asset('img/inicio/imagen_usuario.png') }}" alt="Imagen">
                <p class="nombres"><i class="fa-solid fa-user"></i> Gustavo Tejera Martínes</p>
                
            </div>
               
            <div class="col-9 info"></div>
        </div>
       
    </div>


    
@endsection
