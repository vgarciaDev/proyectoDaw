@extends('templates.template')

@section('title') Nuestro Trabajo @endsection

@section('content')
    <div class="container">
        <div>
            <h1 class="text-center mt-4">Nuestra <span style="color: #00FEFB;">MISIÓN</span></h1>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 fade-in"> 
                <img class="img-tech" src="{{ asset('img/imagen-tech.png') }}" alt="Imagen">   
            </div>
            <div class="col-md-6 mt-7">
                <h2 class="text-center"><b>¿Quieres trabajar para Royal Tech?</b></h2>
                <hr class="underline">
                <h2 class="text-justify mt-5">Creemos en la capacidad y potencial del talento para forjar un mañana más prometedor tanto 
                    para individuos como para empresas en todo el mundo. En Royal Tech, trabajamos para impulsar oportunidades significativas 
                    mediante el uso innovador de la tecnología.</h2>
                <button class="btn btn-bd-primary mt-2 ">Saber más</button>
            </div>
        </div>

        <!--SECCIÓN VALORES-->

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5 mx-auto">
               <div class="beneficios  bg-oscuro">
                    <h3 class="text-center text-light"><i class="fa-solid fa-hippo"></i>   Garantía</h3>
                    <p class="text-justify text-light">Ofrecemos programas de capacitación adaptados a tus necesidades individuales, un plan de desarrollo profesional personalizado y oportunidades de mentoría para tu crecimiento profesional.</p>
               </div>
            </div>
            <div class="col-md-3 mt-5 mx-auto">
                <div class="beneficios bg-oscuro">
                    <h3 class="text-center text-light"><i class="fa-solid fa-mug-hot me-3"></i>   SmartWorking</h3>
                    <p class="text-justify text-light">SmartWorking es la piedra angular de nuestra cultura laboral, permitiendo un enfoque flexible que potencia la productividad y el equilibrio entre la vida laboral y personal.</p>
                </div>    
            </div>
            <div class="col-md-3 mt-5 mx-auto">
                <div class="beneficios bg-oscuro">
                    <h3 class="text-center text-light"><i class="fa-solid fa-money-bills me-3"></i>   Salario Competitivo</h3>
                    <p class="text-justify text-light">Ofrecemos un salario competitivo junto con un plan de retribución flexible, adaptado a las necesidades y preferencias individuales de cada empleado.</p>
                </div>
            </div>
        </div>
        </div>

    </div>
@endsection