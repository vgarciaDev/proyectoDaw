@extends('templates.template')

@section('title') Talento @endsection

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
            @foreach($jobOffers as $jobOffer)
            <div class="col-md-6 mx-auto ">
                <h3>{{$jobOffer['id']}}. {{$jobOffer['title']}}</h3>
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
                <div class="col-md-8 mx-auto">
                        <form @submit.prevent="submit" v-if="formulario == true">
                            @csrf
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
                            
                            <div class="mb-3" v-for="(formacion, index) in form.formaciones" :key="index">
                                <label class="form-label">Formación @{{ index + 1 }} </label>
                                <input type="text" class="form-control mb-2" v-model="form.formaciones[index].titulo" placeholder="Titulo">
                                <input type="text" class="form-control mb-2" v-model="form.formaciones[index].institucion" placeholder="Institución">
                                <input type="text" class="form-control mb-2" v-model="form.formaciones[index].graduacion" placeholder="Año Graduación">
                            </div>
                            <button class="btn btn-bd-primary mb-3" @click.prevent="addFormacion" :disabled="form.formaciones.length >= 3">Añadir Formación</button>
        
                            <div class="mb-3" v-for="(experiencia, index) in form.experiencias" :key="index">
                                <label class="form-label">Experiencia @{{ index + 1 }} </label>
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].puesto" placeholder="Puesto">
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].empresa" placeholder="Empresa">
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].fecha" placeholder="Fecha">
                                <input type="text" class="form-control mb-2" v-model="form.experiencias[index].descripcion" placeholder="Descripción">
                            </div>
                            <button class="btn btn-bd-primary mb-5" @click.prevent="addExperiencia" :disabled="form.experiencias.length >= 3">Añadir Experiencia</button>
                            <br>
                            <button type="submit" class="btn btn-bd-primary mb-5">Enviar CV</button>
                      </form>
                    <div v-else>
                        FORMULARIO ENVIADO
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
                    ]
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
            submit() {
                let self = this;
                let form = {
                    _token: '{{ csrf_token() }}',
                    form: this.form
                }

                $.post("talento", form, function(response){
                    if(response.status == "OK"){
                        console.log("OK");
                        self.formulario = false;
                    } else{
                        console.log("BAD");
                    }
                });
            }
        } 
    });

    app.mount('#form');
</script>
@endsection

