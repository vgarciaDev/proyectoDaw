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
        <div class="row">
            <div class="col-md">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Empleado</th>
                            <th>DNI</th>
                            <th>Puesto</th>
                            <th>Mes</th>
                            <th>Año</th>
                            <th>Horas Totales</th>
                            <th>Ver Detalle</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($workers as $worker)
                            @if ($worker['total_timekeeping'])
                                @foreach($worker['total_timekeeping'] as  $y => $year)
                                   @foreach($year as $key => $total)
                                    <tr>
                                        <td>{{$worker['name']}}</td>
                                        <td>{{$worker['dni']}}</td>
                                        <td>{{$worker['position']}}</td>
                                        <td>{{$key}}</td>
                                        <td>{{$y}}</td>
                                        <td class="text-center">{{$total}}</td>
                                        <td><a href="{{route('verDetalle', ['id' => $worker['id'],'year'=>$y ,'month'=> $key])}}">Ver Detalle</a></td>
                                    </tr>
                                    @endforeach
                                @endforeach
                            @endif
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
    order: [[3, 'desc'], [4, 'desc']], 
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


