@extends('templates.template')

@section('title') Talento @endsection

@section('css') 
<link rel="stylesheet" href="{{ asset('css/talento.css') }}">

@endsection


@section('content')

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 fade-in"> 
                <img class="img-tech" src="{{ asset('img/imagen-tech.png') }}" alt="Imagen">   
            </div>
            <div class="col-md-6 mt-5">
                <h2 class="text-center"><b>¿Quieres trabajar para Royal Tech?</b></h2>
                <hr class="underline">
                <h2 class="text-justify mt-5">Creemos en la capacidad y potencial del talento para forjar un mañana más prometedor tanto 
                    para individuos como para empresas en todo el mundo. En Royal Tech, trabajamos para impulsar oportunidades significativas 
                    mediante el uso innovador de la tecnología.</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-oscuro">
        <div class="row mt-5 ">
            <div class="col-md-4 mx-auto mt-5">
                <h2 class="text-center text-light"><b>¿Qué te ofrecemos?</b></h2>
                <hr class="underline">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-5 mx-auto">
               <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-book-bookmark me-3"></i>   Programas de desarrollo</h3>
                    <p class="text-justify text-light">Ofrecemos programas de capacitación adaptados a tus necesidades individuales, un plan de desarrollo profesional personalizado y oportunidades de mentoría para tu crecimiento profesional.</p>
               </div>
            </div>
            <div class="col-md-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-mug-hot me-3"></i>   SmartWorking</h3>
                    <p class="text-justify text-light">SmartWorking es la piedra angular de nuestra cultura laboral, permitiendo un enfoque flexible que potencia la productividad y el equilibrio entre la vida laboral y personal.</p>
                </div>    
            </div>
            <div class="col-md-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-money-bills me-3"></i>   Salario Competitivo</h3>
                    <p class="text-justify text-light">Ofrecemos un salario competitivo junto con un plan de retribución flexible, adaptado a las necesidades y preferencias individuales de cada empleado.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-people-arrows  me-3"></i>   Cultura Empresarial</h3>
                    <p class="text-justify text-light">
                        La cultura en nuestra organización se caracteriza por ser dinámica y colaborativa, donde se fomenta la igualdad de oportunidades y se promueven sólidos valores que guían nuestras acciones y decisiones.</p>
                </div>
            </div>
            <div class="col-md-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-briefcase me-3"></i>   Royal Tech & You</h3>
                    <p class="text-justify text-light">Nuestro programa de planes de carrera diseñado para impulsar el crecimiento profesional de nuestros colaboradores, ofreciendo oportunidades de desarrollo personalizado y crecimiento dentro de la organización.</p>
                </div>
            </div>
            <div class="col-md-3 mt-5 mx-auto mb-5">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-handshake-angle me-3"></i>   Impacto en la sociedad</h3>
                    <p class="text-justify text-light">
                        Nuestra empresa, comprometida con la responsabilidad social, ofrece oportunidades de voluntariado, promueve la RSC y organiza eventos solidarios para contribuir al bienestar comunitario.</p>
                </div>
            </div>
        </div>
       
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center"><b>Ofertas de Trabajo Activas</b></h2>
                <hr class="underline">
            </div>
        </div>
        <div class="row mt-3">
            @foreach($jobOffers as $index => $jobOffer)
            <div class="col-md-6 mx-auto ">
                <h3>{{$index+1}}. {{$jobOffer['title']}}</h3>
                <p>Localización: {{$jobOffer['location']}}</p>
                <p>Jornada: {{$jobOffer['hours']}}</p>
                <p>Descripción: {{$jobOffer['description']}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container" id="form">
        <div class="row mt-5">
            <div class="col-md-6 mx-auto">
                <h2 class="text-center"><b>Déjanos tu CV</b></h2>
                <hr class="underline">
            </div>
        </div>
            <div class="row">
                <div class="col-md-9 mx-auto">
                        <form @submit.prevent="validateForm" v-if="formulario == true" class="formulario" enctype="multipart/form-data">
                            <div class="mb-3 w-75 mx-auto">
                            <label for="nombre" class="form-label text-light">Nombre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" v-model="form.nombre">
                                <div class="alert alert-danger mt-2" role="alert" v-if="errors.nombre!=''">
                                    @{{errors.nombre}}
                                </div>
                            </div>
                            <div class="mb-3 w-75 mx-auto">
                                <label for="apellidos" class="form-label text-light">Apellidos</label>
                                <input type="text" class="form-control" v-model="form.apellidos">
                            </div>
                            <div class="mb-3 w-75 mx-auto">
                                <label for="telefono" class="form-label text-light">Teléfono <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" v-model="form.telefono">
                                <div class="alert alert-danger mt-2" role="alert" v-if="errors.telefono!=''">
                                    @{{errors.telefono}}
                                </div>
                            </div>
                            <div class="mb-3 w-75 mx-auto">
                                <label for="email" class="form-label text-light">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" v-model="form.email">
                                <div class="alert alert-danger mt-2" role="alert" v-if="errors.email!=''">
                                    @{{errors.email}}
                                </div>
                            </div>
                            
                            <div class="mb-3 w-75 mx-auto" v-for="(formacion, index) in form.formaciones" :key="index">
                                <label class="form-label text-light">Formación @{{ index + 1 }} </label>
                                <input type="text" class="form-control mb-2" v-model="form.formaciones[index].titulo" placeholder="Titulo">
                                <input type="text" class="form-control mb-2" v-model="form.formaciones[index].institucion" placeholder="Institución">
                                <input type="text" class="form-control mb-2" v-model="form.formaciones[index].graduacion" placeholder="Año Graduación">
                            </div>

                            <div class="mb-3 w-75 mx-auto">
                                <button class="btn btn-bd-primary" @click.prevent="addFormacion" :disabled="form.formaciones.length >= 3">Añadir Formación</button>
                            </div>

                            <div class="mb-3 w-75 mx-auto" v-for="(experiencia, index) in form.experiencias" :key="index">
                                <label class="form-label text-light">Experiencia @{{ index + 1 }} </label>
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].puesto" placeholder="Puesto">
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].empresa" placeholder="Empresa">
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].fecha" placeholder="Fecha">
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].descripcion" placeholder="Descripción">
                            </div>
                            <div class="mb-3 w-75 mx-auto">
                                <button class="btn btn-bd-primary" @click.prevent="addExperiencia" :disabled="form.experiencias.length >= 3">Añadir Experiencia</button>
                             </div>
                             
                            <div class="mb-3 w-75 mx-auto">
                                <label for="oferta" class="form-label text-light">Oferta a postular</label>
                                <select class="form-select" aria-label="Default select example" v-model="form.oferta">
                                    <option value="">Ninguna actual, cuando mi perfil se ajuste a otra</option>
                                    @foreach($jobOffers as $index => $jobOffer)
                                    <option value="{{$jobOffer['id']}}">{{$index+1}}. {{$jobOffer['title']}} - {{$jobOffer['location']}}</option>
                                    @endforeach
                                  </select>                             
                            </div>

                            <div class="mb-3 w-75 mx-auto">
                                <label for="file" class="form-label text-light">Adjunta tu CV</label>
                                <input type="file" class="form-control"  @change="handleFileUpload">
                            </div>

                            <div class="w-75 mx-auto">
                                <button type="submit" class="btn btn-bd-primary mb-5">Enviar CV</button>
                            </div>
                        </form>
                        <div class="enviado" v-else>
                            <h2 class="text-center"><i style="color: green" class="fa-solid fa-circle-check"></i> Gracias por dejar tu CV</h2>
                            <h4 class="text-center">Si tu perfil se ajusta a alguna nueva oferta te contactaremos</h4>
                        </div>
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
                    oferta:"",
                    formaciones: [
                        {
                            titulo: "",
                            institucion: "",
                            graduacion: "",
                        }
                    ],
                    experiencias: [
                        {
                            puesto: "",
                            empresa: "",
                            fecha: "",
                            descripcion: ""
                        }
                    ], 
                }, 
                file: null,
                errors: {
                    nombre: "",
                    telefono: "",
                    email: "",
                },
                formulario: true
            }
        }, 
        methods: {
            addFormacion(){
                if(this.form.formaciones.length < 3){
                    this.form.formaciones.push({titulo:'', institucion: '', graduacion: ''});
                } 
            },
            addExperiencia(){
                if(this.form.experiencias.length < 3){
                    this.form.experiencias.push({puesto:'', empresa: '', fecha: '', descripcion: ""});
                } 
            },
            handleFileUpload(event) {
                this.file = event.target.files[0];
            },
            submit() {
                let self = this;                
                let formData = new FormData();
                
                formData.append('nombre', this.form.nombre);
                formData.append('email', this.form.email);
                formData.append('telefono', this.form.telefono);
                formData.append('oferta', this.form.oferta);
                let formacionesJSON = JSON.stringify(this.form.formaciones);
                let experienciasJSON = JSON.stringify(this.form.experiencias);
                formData.append('formaciones', formacionesJSON);
                formData.append('experiencias', experienciasJSON);
                formData.append('pdf', this.file);
                console.log(formacionesJSON);
                $.ajax({
                    url: 'talento',
                    type: 'POST',
                    cache: false,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if(response.status == "OK"){
                            self.formulario = false;
                        }
                    },
                    error: function(error) {
                    console.error("Error al enviar el formulario: ", error);
                    }
                });
            }, 
            validateForm(){
                //Iniciamos nombre a vacío por si se corrigen los errores que no salga de nuevo
                this.errors.nombre="";
                if(this.form.nombre == ""){
                    this.errors.nombre = "El nombre es obligatorio";
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
                if(this.errors.nombre == "" && this.errors.telefono == "" && this.errors.email == ""){
                   this.submit();
                }
        }
        } 
    });

    app.mount('#form');
</script>
@endsection
