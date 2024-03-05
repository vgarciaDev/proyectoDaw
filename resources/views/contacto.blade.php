@extends('templates.template')

@section('title') Contacto @endsection

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
    <div class="container mt-4">
        <div class="row mt-2">
            <div class="col-md-6 mx-auto">
                <form  id="contact">
                    <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" v-model="form.nombre">
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" v-model="form.apellidos">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" v-model="form.telefono">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" v-model="form.email">
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
                      </div>
    
                    <br>
                    <button type="button" @click="submit" class="btn btn-primary mb-5">Contactar</button>
              </form>
            </div>
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
                }
                }
            }, 
        methods: {
            submit() {
                console.log(this.form);
                return false;
            }
        }   
    });

    app.mount('#contact');
</script>
@endsection
