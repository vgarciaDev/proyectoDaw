@extends('templateERP')

@section('title') Cursos @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/cursos.css') }}">
@endsection
    
@section('content')
<div class="container mt-5">
    <div class="row mt-5">
        @if (count($coursesWorker)>0)
        <h2>Apuntado en:</h2>
        @foreach ($coursesWorker as $courseWorker)
            <div class="col-md">
                <h3>{{$courseWorker["id"]}}. {{$courseWorker["title"]}} </h3>
                <p><b>Duración:</b> {{$courseWorker["duration"]}} | <b>Fechas:</b> {{$courseWorker["initial_date"]}} - {{$courseWorker["end_date"]}} | <b>Descripción:</b> {{$courseWorker["description"]}}</p>
                <p></p>
                <p></p>
                <a href="{{ route('curso', $courseWorker['id']) }}"><button class="btn btn-bd-primary">Ver Más</button></a>
                <a href="{{ route('desapuntarse', $courseWorker['id']) }}"><button class="btn btn-bd-primary">Desapuntarse</button></a>
            </div>
        @endforeach
        @endif
    </div>
</div>
<div class="container mt-5">
    <div class="row mt-5">
        <h2>Cursos Disponibles</h2>
        @foreach ($courses as $course)
            <div class="col-md-3">
                <h3>{{$course["id"]}}. {{$course["title"]}}</h3>
                <p><b>Duración:</b> {{$course["duration"]}}h.</p>
                <p><b>Fechas:</b> {{$course["initial_date"]}} - {{$course["end_date"]}}</p>
                <p><b>Dificultad:</b> {{$course["difficulty"]}}</p>
                <p><b>Descripción:</b> {{$course["description"]}}</p>
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