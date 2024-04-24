@extends('templateERPRRHH')

@section('title') Nominas @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/nominas.css') }}">
@endsection
@section('content') 
<div class="w-75 m-auto mt-5">
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">DNI</th>
        <th scope="col">Departamento</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($workers as $item)
        <tr>
            <td>{{$item['name']}}</td>
            <td>{{$item['dni']}}</td>
            <td>{{$item['department']}}</td>
            
            <td>
                <a  href="{{ route('generarNomina', ['id' => $item->id]) }}" class="generarNomina btnStyle">Generar Nómina</a>
                <a  href="{{ route('verNominas', ['id' => $item->id]) }}" class="verNominas btnStyle">Ver Nóminas</a>
            </td>
        </tr>
    @endforeach
    </tbody>
  </table>   </div>   
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
</script>

