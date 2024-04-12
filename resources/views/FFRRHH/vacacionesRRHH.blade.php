@extends('templateERPRRHH')

@section('title') Vacaciones @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vacaciones.css') }}">
@endsection
@section('content')    
    <h1>Aqui viene la tabla</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Peticion vacaciones</th>
            <!-- Agrega aquí más encabezados de columna según los campos de tu tabla -->
        </tr>    
        @foreach ($vacaciones as $vacacion)
            <tr>
                <td>{{ $vacacion->id }}</td>
                <td>{{ $vacacion->user }}</td>
                <td>{{ $vacacion->vacaciones }}</td>
                <td>
                    <input type="button" value="Aceptar" class="btn btn-primary">
                </td>
                <td>
                    <input type="button" value="Rechazar" class="btn btn-danger">
                </td>               
                <!-- Agrega aquí más celdas de datos según los campos de tu tabla -->
            </tr>
        @endforeach
    </table>
@endsection


