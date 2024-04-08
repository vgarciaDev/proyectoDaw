@extends('templateERP')

@section('title') Cursos @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/cursos.css') }}">
@endsection
    
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        @foreach ($courses as $course)
            <div class="col-md-3">
                <h3>{{$course["id"]}}. {{$course["title"]}}</h3>
                <p>Duración: {{$course["duration"]}}</p>
                <p>Fechas: {{$course["initial_date"]}} - {{$course["end_date"]}}</p>
                <p>Dificultad: {{$course["difficulty"]}}</p>
                <p>Descripción: {{$course["description"]}}</p>
                <a href="{{ route('curso', $course['id']) }}"><button class="btn btn-bd-primary">Ver Más</button></a>
            </div>
        @endforeach
    </div>
</div>

@endsection
@section('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

</script>
@endsection