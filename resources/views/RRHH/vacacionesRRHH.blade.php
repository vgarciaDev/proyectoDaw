@extends('templateERPRRHH')

@section('title') Vacaciones @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
    
@endsection
@section('content')    
<h2>Solicitudes de vacaciones</h2>
    <table class="table">
        <tr>
            {{-- <th class="tablas">ID_solicitud</th>
            <th class="tablas">ID_worker</th> --}}
            <th>Nombre y Apellidos</th>
            <th style="text-align: center">Peticion vacaciones</th>
            <th colspan="2" style="text-align: center">Aceptar/Rechazar</th>
            <!-- Agrega aquí más encabezados de columna según los campos de tu tabla -->
        </tr>    
        @foreach ($vacaciones->whereNull('estado_solicitud') as $vacacion)
            <tr>
                {{-- <td class="tablas">{{ $vacacion->id }}</td>
                <td class="tablas">{{ $vacacion->worker_id }}</td> --}}
                <td>{{ $vacacion->name }}</td>
                <td>{{ $vacacion->solicitud_vacaciones }}</td>
                <td>
                    <input type="button" value="Aceptar" class="aceptar seccion-empleado" id={{$vacacion->id}}>
                </td>
                <td>
                    <input type="button" value="Rechazar" class="rechazar seccion-empleado" id={{$vacacion->id}}>
                </td>               
                <!-- Agrega aquí más celdas de datos según los campos de tu tabla -->
            </tr>
        @endforeach
    </table>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.aceptar').click(function(e){
            var id = e.target.id;
            console.log(id)
            $.ajax({
                url: "{{ route('aceptarVacaciones') }}",
                type: 'POST',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response){
                    alert('Vacaciones aceptadas');
                    window.location.href = '/proyectoDaw/public/RRHH/vacaciones';
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Hubo un error al enviar el id');
                    console.log(error);
                }
            });
        });
    });
    $(document).ready(function(){
        $('.rechazar').click(function(e){
            var id = e.target.id;
            console.log(id)
            $.ajax({
                url: "{{ route('rechazarVacaciones') }}",
                type: 'POST',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response){
                    alert('Vacaciones rechazadas');
                    window.location.href = '/proyectoDaw/public/RRHH/vacaciones';
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Hubo un error al enviar el id');
                    console.log(error);
                }
            });
        });
    });
    </script>

