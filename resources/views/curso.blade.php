@extends('templateERP')

@section('title') Cursos @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/cursos.css') }}">
@endsection
    
@section('content')
<div class="container mt-5"  id='app'>
    <div class="row mt-5">
            <div v-if="content===true" class="col-md-9">
                <h2>{{$course["id"]}}. {{$course["title"]}}</h2>
                <p><b>Duración:</b> {{$course["duration"]}}h.</p>
                <p><b>Fechas:</b> {{$course["initial_date"]}} / {{$course["end_date"]}}</p>
                <p><b>Dificultad:</b> {{$course["difficulty"]}}</p>
                <p ><b>Descripción:</b> </p>
                <p class="text-justify">{!! nl2br(e($course['long_description'])) !!}</p>  {{--Función para formatear el texto tal y como viene en bd con saltos de línea --}}
                <button class="btn btn-bd-primary" @click="singUp">Apuntarse</button>
            </div>
            <div v-else class="col-md-9">
                <h2 class="text-center"> <i style="color: green" class="fa-solid fa-circle-check"></i> Se ha registrado en el curso {{$course["title"]}} correctamente</h3>
                    <p class="text-center"><b>Fechas:</b> {{$course["initial_date"]}} / {{$course["end_date"]}}</p>
                    <p class="text-center">Cuando se aproxime la fecha le convocaremos por Teams para que se pueda conectar</p>
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
        data() {
            return {
                content: true,
                id: "{{$idWorker}}" 
            }
        }, 
        methods: {
            singUp(){
                let self = this;
                let form = {
                    idWorker: this.id,
                    idCourse: "{{$course['id']}}"
                }
                $.post("apuntarse", form, function(response){
                    if(response.status == "OK"){
                        self.content = false;
                        console.log("OK");
                    } else if(response.status == "KO"){
                        console.log(response.error);
                    }
                });
            }
        }
    });

    app.mount("#app");
</script>
@endsection