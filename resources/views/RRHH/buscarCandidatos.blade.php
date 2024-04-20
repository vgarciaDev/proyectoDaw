@extends('templateERPRRHH')

@section('title') Empleados @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
@endsection
@section('content')    
    <div class="container mt-5" id="app">
        <h2 style="mt-5">Buscar Candidatos</h2>
        <div class="row mt-2">
            <div class="col-md-6">
                <a href="{{ url('/RRHH/candidatos') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-rotate-left"></i> Volver</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <form action="{{route('buscarCandidatosPost')}}">
                    <label class="form-label" for="select">Buscar por:</label>
                <select class="form-select" name="select" id="select">
                    <option value="name">Nombre</option>
                    <option value="tel">Teléfono</option>
                    <option value="mail">Email</option>
                    <option value="education">Educación</option>
                    <option value="experience">Experiencia</option>
                    <option value="job_offer">Oferta</option>
                </select>
                <input class="form-control mt-3 mb-3" type="text" name="input" id="input">
                <button type="submit" class="btn seccion-empleado pb-3">Buscar</button>
            </form>
            </div>
        </div>
    </div>
    
@endsection

@section('script')

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<script>
    const app = Vue.createApp({
        delimiters: ['{-', '-}'],
        data(){
            return{
                id: ""
            }
        }, 
        methods:{
            deleteOffer(id){
                Swal.fire({
                    title: "¿Seguro que quieres eliminar esta oferta?",
                    text: "Esta acción no se podrá deshacer",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, eliminar",
                    cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.get('../candidatos/ofertas/eliminar', {id:id}, function(response){
                                if(response.status == "OK"){
                                    location.reload();
                                }
                            })
                        }
                    });
            }
        }
    });
    app.mount("#app");

    let table = new DataTable('#myTable', {
    order: [[3, 'desc']], 
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


