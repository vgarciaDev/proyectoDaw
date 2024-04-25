@extends('templateERPRRHH')

@section('title') Fichaje @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
@endsection
@section('content')    
<div class="container mt-5">
    <div class="row mt-5">
        <h2>Fichaje Empleados</h2>
        <div class="row mt-2">
            <div class="col-md-6">
                <a href="{{ route('verFichajes') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-list"></i> Volver</button></a>
            </div>
        </div>
        <p><b>Empleado:</b>  {{$worker['name']}}</p>
        <p><b>DNI:</b>  {{$worker['dni']}}</p>
        <p><b>Puesto:</b>  {{$worker['position']}}</p>
        <div class="row">
            <div class="col-md">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora de entrada</th>
                            <th>Inicio Pausa</th>
                            <th>Fin Pausa</th>
                            <th>Hora de Salida</th>
                            <th>Tiempo total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($timekeeping as $item)
                           <tr>
                                <td>{{$item['date']}}</td>
                                <td>{{$item['clock_in']}}</td>
                                <td>{{$item['clock_in_pause']}}</td>
                                <td>{{$item['clock_out_pause']}}</td>
                                <td>{{$item['clock_out']}}</td>
                                <td>{{$item['total_time']}}</td>
                           </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
@endsection


@section('script')


<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<script>
   

    let table = new DataTable('#myTable', {
    order: [[0, 'asc']], 
    language: {
            "sEmptyTable":     "No hay datos disponibles en la tabla",
            "sInfo":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando 0 a 0 de 0 registros",
            "sInfoFiltered":   "(filtrado de _MAX_ registros totales)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "Mostrar _MENU_ registros por página",
            "sLoadingRecords": "Cargando...",
            "sProcessing":     "Procesando...",
            "sSearch":         "Buscar:",
            "sZeroRecords":    "No se encontraron registros coincidentes",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": activar para ordenar la columna ascendente",
                "sSortDescending": ": activar para ordenar la columna descendente"
            },
            "select": {
                "rows": {
                    "_": "Seleccionado %d filas",
                    "0": "Haga clic en una fila para seleccionarla",
                    "1": "Seleccionado 1 fila"
                }
            }
        }
});

</script>
@endsection


