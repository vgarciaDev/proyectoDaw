@extends('templateERPRRHH')

@section('title') Vacaciones @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
    
@endsection
@section('content')    
    <h1>Aqui viene la tabla</h1>
    <table>
        <tr>
            {{-- <th class="tablas">ID_solicitud</th>
            <th class="tablas">ID_worker</th> --}}
            <th class="tablas">Nombre y Apellidos</th>
            <th class="tablas">Peticion vacaciones</th>
            <!-- Agrega aquí más encabezados de columna según los campos de tu tabla -->
        </tr>    
        @foreach ($vacaciones->whereNull('estado_solicitud') as $vacacion)
            <tr class="tablas">
                {{-- <td class="tablas">{{ $vacacion->id }}</td>
                <td class="tablas">{{ $vacacion->worker_id }}</td> --}}
                <td class="tablas">{{ $vacacion->name }}</td>
                <td class="tablas">{{ $vacacion->solicitud_vacaciones }}</td>
                <td class="tablas">
                    <input type="button" value="Aceptar" class="btn btn-primary" id={{$vacacion->id}}>
                </td>
                <td class="tablas">
                    <input type="button" value="Rechazar" class="btn btn-danger" id={{$vacacion->id}}>
                </td>               
                <!-- Agrega aquí más celdas de datos según los campos de tu tabla -->
            </tr>
        @endforeach
    </table>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn-primary').click(function(e){
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
        $('.btn-danger').click(function(e){
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

