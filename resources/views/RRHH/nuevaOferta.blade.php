@extends('templateERPRRHH')

@section('title') Nueva Oferta de Empleo @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
@endsection
@section('content')    
    <div class="container mt-5">
        <h2 style="mt-5">Añadir Empleado</h2>
        <div class="row mt-2">
            <div class="col-md-6">
                <a href="{{ url('/RRHH/candidatos/ofertas') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-rotate-left"></i> Volver</button></a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <form action="{{route('añadirOfertaPost')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Título:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
        
                    <div class="mb-3">
                        <label for="location" class="form-label">Localización:</label>
                        <input type="text" class="form-control" id="location" name="location" >
                    </div>
        
                    <div class="mb-3">
                        <label for="hours" class="form-label">Jornada:</label>
                        <input type="text" class="form-control" id="hours" name="hours">
                    </div>
        
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Descripción"  name="description" id="description" style="height: 300px"></textarea>
                        <label for="description">Descripción</label>
                      </div>
        
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    
@endsection


