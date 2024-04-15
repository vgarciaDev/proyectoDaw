@extends('templateERPRRHH')

@section('title') Empleados @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
@endsection
@section('content')    
<div class="container mt-5">
    <div class="row mt-5">
        <h2>Nuevo Curso</h2>
        <div class="col-md-6">
            <form action="{{route('editarCursoRRHHPost')}}" method="POST">
                <input type="hidden" name="id" value="{{$course['id']}}">
                <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$course['title']}}">
              </div>
              <div class="form-group">
                <label for="duration">Duración:</label>
                <input type="text" class="form-control" id="duration" name="duration"value="{{$course['duration']}}">
              </div>
              <div class="form-group">
                <label for="description">Descripción:</label>
                <input type="text" class="form-control" id="description" name="description"value="{{$course['description']}}">
              </div>
              <div class="form-group">
                <label for="initial_date">Fecha de Inicio:</label>
                <input type="date" class="form-control" id="initial_date" name="initial_date"value="{{$course['initial_date']}}">
              </div>
              <div class="form-group">
                <label for="end_date">Fecha de Fin:</label>
                <input type="date" class="form-control" id="end_date" name="end_date"value="{{$course['end_date']}}">
              </div>
              <div class="form-group">
                <label for="difficulty">Dificultad:</label>
                <select class="form-control" id="difficulty" name="difficulty"value="{{$course['difficulty']}}">
                  <option value="baja">Baja</option>
                  <option value="media">Media</option>
                  <option value="alta">Alta</option>
                </select>
              </div>
              <div class="form-group">
                <label for="long_description">Descripción larga:</label>
                <textarea class="form-control" id="long_description" name="long_description" rows="5">{{$course['long_description']}}</textarea>
              </div>
              <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
        
    </div>
</div>
    
@endsection



