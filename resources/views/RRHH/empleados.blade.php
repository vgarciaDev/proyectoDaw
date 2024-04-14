@extends('templateERPRRHH')

@section('title') Vacaciones @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
@endsection
@section('content')    
    <div class="container mt-5" id="app">
        <h2 style="mt-5">Empleados</h2>
        <div class="row mt-2">
            <div class="col-md-6">
                <a href="{{ url('/RRHH/empleados/añadir') }}"><button  class="seccion-empleado pb-3"><i class="fa-solid fa-list"></i> Añadir Empleado</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Puesto de trabajo</th>
                        <th scope="col">Salario bruto</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($lista as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['dni']}}</td>
                            <td>{{$item['department']}}</td>
                            <td>{{$item['position']}}</td>
                            <td>{{$item['salary']}}€</td>
                            <td>
                                <a href="{{route('editarEmpleado', $item['id'])}}"><i class="fa-solid fa-pen-to-square icon-edit"></i></a> / 
                                <i @click="deleteWorker({{$item['id']}})" class="fa-solid fa-trash icon-delete"></i>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    const app = Vue.createApp({
        delimiters: ['{-', '-}'],
        data(){
            return{
                id: ""
            }
        }, 
        methods:{
            deleteWorker(id){
                Swal.fire({
                    title: "¿Seguro que quieres eliminar este trabajador?",
                    text: "Esta acción no se podrá deshacer",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Si, finalizar",
                    cancelButtonText: "Cancelar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.get('../RRHH/empleados/eliminar', {id:id}, function(response){
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
</script>
@endsection


