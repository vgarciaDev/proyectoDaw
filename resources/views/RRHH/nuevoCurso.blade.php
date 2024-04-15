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
            <form action="{{route('añadirCursoRRHHPost')}}" method="POST">
                <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title">
              </div>
              <div class="form-group">
                <label for="duration">Duración:</label>
                <input type="text" class="form-control" id="duration" name="duration">
              </div>
              <div class="form-group">
                <label for="description">Descripción:</label>
                <input type="text" class="form-control" id="description" name="description">
              </div>
              <div class="form-group">
                <label for="initial_date">Fecha de Inicio:</label>
                <input type="date" class="form-control" id="initial_date" name="initial_date">
              </div>
              <div class="form-group">
                <label for="end_date">Fecha de Fin:</label>
                <input type="date" class="form-control" id="end_date" name="end_date">
              </div>
              <div class="form-group">
                <label for="difficulty">Dificultad:</label>
                <select class="form-control" id="difficulty" name="difficulty">
                  <option value="baja">Baja</option>
                  <option value="media">Media</option>
                  <option value="alta">Alta</option>
                </select>
              </div>
              <div class="form-group">
                <label for="long_description">Descripción larga:</label>
                <textarea class="form-control" id="long_description" name="long_description" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        
    </div>
</div>
    
@endsection



