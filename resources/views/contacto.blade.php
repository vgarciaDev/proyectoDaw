@extends('templates.template')

@section('title') Contacto @endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
@endsection


@section('content')
<div class="container-fluid p-0 mt-2">
    <div class="video-container mt-2">
        <video autoplay loop muted playsinline class="w-100">
            <source src="{{asset('img/contacto/technology_-_888 (720p).mp4')}}" type="video/mp4">
            Tu navegador no admite el elemento de video.
        </video>
        <div class="overlay"></div>
        <div class="texto-superpuesto mt-5">
            <h2 class="text-light fs-1 mt-5"><b>¿Hablamos?</b></h2>
            <hr class="underline">
            <h3 class="text-light">Estamos encantados de ayudarte</h3>
        </div>
    </div>
</div>
    <div class="container mt-4" id="contact">
        <div class="row mt-2">
            <div class="col-md-8 mx-auto">
                <form @submit.prevent="validateForm" v-if="contacto == true" class="formulario">
                    <div class="mb-3">
                    <label for="nombre" class="form-label text-light">Nombre</label>
                    <input type="text" class="form-control" v-model="form.nombre">
                    <div class="alert alert-danger mt-2" role="alert" v-if="errors.nombre!=''">
                        @{{errors.nombre}}
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label text-light">Apellidos</label>
                        <input type="text" class="form-control" v-model="form.apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label text-light">Teléfono</label>
                        <input type="text" class="form-control" v-model="form.telefono">
                        <div class="alert alert-danger mt-2" role="alert" v-if="errors.telefono!=''">
                            @{{errors.telefono}}
                          </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light" text-light>Email</label>
                        <input type="email" class="form-control" v-model="form.email">
                        <div class="alert alert-danger mt-2" role="alert" v-if="errors.email!=''">
                            @{{errors.email}}
                          </div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select"  v-model="form.opciones">
                            <option value="" disabled selected>¿En qué te podemos ayudar?</option>
                            <option value="info">Información</option>
                            <option value="seleccion">Proceso de selección</option>
                            <option value="comercial">Departamento comercial</option>
                            <option value="comunicacion">Departamento de comunicación</option>
                            <option value="otro">Otro motivo</option>
                        </select>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" v-model="form.mensaje"></textarea>
                        <label for="floatingTextarea2">Mensaje</label>
                        <div class="alert alert-danger mt-2" role="alert" v-if="errors.mensaje!=''">
                            @{{errors.mensaje}}
                          </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-bd-primary mb-5">Contactar</button>
              </form>
              <div class="enviado" v-else>
                    <h2 class="text-center"><i style="color: green" class="fa-solid fa-circle-check"></i> Gracias por ponerte en contacto</h2>
                    <h4 class="text-center">Te responderemos a la mayor brevedad posible</h4>
              </div>
            </div>
        </div>
    </div>
<div class="container-fluid row justify-content-center fondo_container p-4">
    <div class=" contenedor w-50 ">
        <iframe class="shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3292.801394463721!2d-3.5116335458877024!3d37.785412958801125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6e65db1982fa79%3A0xac125553ba270bda!2zMjM1NDAgVG9ycmVzLCBKYcOpbiwgRXNwYcOxYQ!5e0!3m2!1ses!2sde!4v1709674162317!5m2!1ses!2sde" width="600" height="450" style="border: #00fffb 4px solid; border-radius:15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div> 

@endsection


@section('script')
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    const app = Vue.createApp({
        data() {
            return {
                form: {
                    nombre: "",
                    apellidos: "",
                    telefono: "",
                    email: "",
                    opciones: "",
                    mensaje: ""
                },
                errors: {
                    nombre: "",
                    telefono: "",
                    email: "",
                    mensaje: ""
                },
                contacto: true
                }
            }, 
        methods: {
            submit() {
                let self = this;
                $.post("contacto", this.form, function(response){
                    if(response.status == "OK"){
                        console.log("OK");
                        self.contacto = false;
                    } else{
                        console.log("BAD");
                    }
                });
            }, 
            validateForm(){
                //Iniciamos nombre a vacío por si se corrigen los errores que no salga de nuevo
                this.errors.nombre="";
                if(this.form.nombre == ""){
                    this.errors.nombre = "El nombre es obligatorio";
                }
                
                //Iniciamos mensaje a vacío por si se corrigen los errores que no salga de nuevo
                this.errors.mensaje="";
                if(this.form.mensaje == ""){
                    this.errors.mensaje = "Dinos en qué te podemos ayudar";
                }

                //Iniciamos telefono a vacío por si se corrigen los errores que no salga de nuevo
                this.errors.telefono="";
                let checkTel = /^\+?\d{0,3}?\s?\(?\d{1,3}\)?[\s.-]?\d{3,4}[\s.-]?\d{4}$/ //Expresión regular para comprobar formato telefono
                if(checkTel.test(this.form.telefono)){ //.test comprueba que una expresión regular se cumple
                    this.errors.telefono="";
                } else {
                    this.errors.telefono="El telefono no tiene el formato correcto";
                }

                //Iniciamos email a vacío por si se corrigen los errores que no salga de nuevo
                this.errors.email="";
                let checkEmail = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/; //Expresión regular para comprobar formato email
                if(checkEmail.test(this.form.email)){
                    this.errors.email="";
                } else {
                    this.errors.email="El email no tiene el formato correcto";
                }

                //Si no hay errores enviamos formulario
                if(this.errors.nombre == "" && this.errors.telefono == "" && this.errors.email == "" && this.errors.mensaje == ""){
                   this.submit();
                }
            }
        }   
    });

    app.mount('#contact');
</script>
@endsection
