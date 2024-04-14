@extends('templateERPRRHH')

@section('title') Vacaciones @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
@section('content')    
    <h1>Aqui viene la tabla</h1>
    <table>
        <tr>
            <th class="tablas">ID_solicitud</th>
            <th class="tablas">ID_worker</th>
            <th class="tablas">Nombre y Apellidos</th>
            <th class="tablas">Peticion vacaciones</th>
            <!-- Agrega aquí más encabezados de columna según los campos de tu tabla -->
        </tr>    
        @foreach ($vacaciones as $vacacion)
            <tr class="tablas">
                <td class="tablas">{{ $vacacion->id }}</td>
                <td class="tablas">{{ $vacacion->worker_id }}</td>
                <td class="tablas">{{ $vacacion->name }}</td>
                <td class="tablas">{{ $vacacion->solicitud_vacaciones }}</td>
                <td class="tablas">
                    <input type="button" value="Aceptar" class="btn btn-primary">
                </td>
                <td class="tablas">
                    <input type="button" value="Rechazar" class="btn btn-danger">
                </td>               
                <!-- Agrega aquí más celdas de datos según los campos de tu tabla -->
            </tr>
        @endforeach
    </table>
@endsection

<script>
    $(document).ready(function(){
        $('.btn-primary').click(function(){
            var id = $(this).data('id');
            $.ajax({
                url: '{{ route('aceptarVacaciones') }}',
                type: 'POST',
                data: {
                    id: id,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response){
                    alert(response.success);
                }
            });
        });
    });
    </script>

