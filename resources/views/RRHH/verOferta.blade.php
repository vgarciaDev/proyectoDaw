@extends('templateERPRRHH')

@section('title') Empleados @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
@endsection
@section('content')    
    <div class="container mt-5" id="app">
        <div class="row mt-2">
            <div class="col-md-6">
                <a class="me-3" href="{{ route('añadirOferta') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-list"></i> Añadir Oferta</button></a>
                <a href="{{ url('/RRHH/candidatos/ofertas') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-rotate-left"></i> Volver</button></a>
            </div>
        </div>
        <h2 style="mt-5">{{$jobOffer['title']}}</h2>
        <div class="row">
            <div class="col-md">
                <p><b>Localización:</b> {{$jobOffer['location']}}</p>
                <p><b>Jornada:</b> {{$jobOffer['hours']}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <p> <b>Descripción:</b></p>
                <p>{{$jobOffer['description']}}</p>
            </div>
        </div>
        <h2>Candidatos:</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Educación 1</th>
                    <th scope="col">Educación 2</th>
                    <th scope="col">Educación 3</th>
                    <th scope="col">Experiencia 1</th>
                    <th scope="col">Experiencia 2</th>
                    <th scope="col">Experiencia 3</th>
                    <th scope="col">CV</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($candidates as $item)
                    <tr>
                        <td>{{$item['name']}} {{$item['lastname']}}</td>
                        <td>{{$item['tel']}}</td>
                        <td>{{$item['education_title_1']}}</td>
                        <td>{{$item['education_title_2']}}</td>
                        <td>{{$item['education_title_3']}}</td>
                        <td>{{$item['experience_position_1']}}</td>
                        <td>{{$item['experience_position_2']}}</td>
                        <td>{{$item['experience_position_3']}}</td>
                        <td><a href='{{route("descargarPDF", $item["id"])}}' target="_blank">Ver CV</a></td>
                    </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
</div>

@endsection
