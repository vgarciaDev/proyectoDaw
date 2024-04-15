@extends('templateERPRRHH')

@section('title') Empleados @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
@endsection
@section('content')    
<div class="container mt-5">
    <div class="row mt-5">
        <h2>Cursos Disponibles</h2>
        <div class="row mt-2">
            <div class="col-md-6">
                <a href="{{ route('añadirCursoRRHH') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-list"></i> Añadir Curso</button></a>
            </div>
        </div>
        @if($courses)
        @foreach ($courses as $course)
            <div class="col-md-3">
                <h3>{{$course["id"]}}. {{$course["title"]}}</h3>
                <p><b>Duración:</b> {{$course["duration"]}}h.</p>
                <p><b>Fechas:</b> {{$course["initial_date"]}} - {{$course["end_date"]}}</p>
                <p><b>Dificultad:</b> {{$course["difficulty"]}}</p>
                <p><b>Descripción:</b> {{$course["description"]}}</p>
                <a href="{{ route('cursoRRHH', $course['id']) }}"><button class="btn btn-bd-primary">Ver Más</button></a>
            </div>
        @endforeach
        @else
        <h2 class="text-center">No existen cursos disponibles</h2>
        @endif
    </div>
</div>
    
@endsection
