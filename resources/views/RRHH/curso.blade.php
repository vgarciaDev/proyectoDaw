@extends('templateERPRRHH')

@section('title') Cursos @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
@endsection
    
@section('content')
<div class="container mt-5"  id='app'>
    <div class="row mt-2">
        <div class="col-md-6">
            @if ($course)
                <a href="{{ route('editarCursoRRHH', $course["id"]) }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-list"></i> Editar Curso</button></a>
                <a href="{{ route('borrarCursoRRHH', $course["id"]) }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-list"></i> Borrar Curso</button></a>
            @endif
        </div>
        
    </div>
    <div class="row mt-3">
            <div class="col-md-9">
                <h2>{{$course["id"]}}. {{$course["title"]}}</h2>
                <p><b>Duración:</b> {{$course["duration"]}}h.</p>
                <p><b>Fechas:</b> {{$course["initial_date"]}} / {{$course["end_date"]}}</p>
                <p><b>Dificultad:</b> {{$course["difficulty"]}}</p>
                <p><b>Descripción:</b></p>
                <p class="text-justify">{!! nl2br(e($course['long_description'])) !!}</p>  {{--Función para formatear el texto tal y como viene en bd con saltos de línea --}}
            </div>
    </div>
    <div class="row mt-3">
        <div class="col-md">
            <h2>Trabajadores apuntados</h2>
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Puesto de trabajo</th>
                    </tr>
                    @foreach ($workers as $key => $item)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['dni']}}</td>
                                <td>{{$item['department']}}</td>
                                <td>{{$item['position']}}</td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

@endsection