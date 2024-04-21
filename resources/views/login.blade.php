@extends('templates.template')

@section('title') Login @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="container mt-5" id="form">
    <div class="row mt-5" >
        <h2 class="text-center mt-5">Acceso Empleados:</h2>
        <div class="col-md-6 mt-5 mx-auto">
            <form class="login" @submit.prevent="submit">
                <label for="user" class="form-label">DNI: </label>
                <input type="text" class="form-control mb-3" name="user" v-model="form.user">
                <label for="password" class="form-label">Contraseña: </label>
                <input type="password" class="form-control mb-5" name="password" v-model="form.password">
                <div class="d-grid gap-2 mb-5">
                    <button class="btn btn-primary" type="submit">Acceder</button>
                </div>
                <div v-if="error != ''" class="alert alert-danger" role="alert">
                    @{{error}}
                </div>
                </div>
            </form>
            

    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    const form = Vue.createApp({
        data(){
            return{
                form: {
                    user: "",
                    password: ""
                }, 
                error: ""
            }
        }, 
        methods:{
            submit(){
                let self = this;
                $.post('login', this.form, function(response){
                    if(response.status == "OK"){
                        if(response.rol == 2){
                            window.location.href = "/proyectoDaw/public/acceso";
                        } else{
                            window.location.href = "/proyectoDaw/public/RRHH";
                        }
                    } else{
                        self.error = "No existe ningún trabajador con estas credenciales"
                        console.log("Error");
                    }
                })
            }
        }
    });

    form.mount('#form');
</script>
@endsection