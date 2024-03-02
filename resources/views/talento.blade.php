@extends('templates.template')

@section('title') Talento @endsection

@section('content')
    <div class="container mt-4">
        <div class="row mt-5">
            <div class="col-6 fade-in"> 
                <img class="img-tech" src="{{ asset('img/imagen-tech.png') }}" alt="Imagen">   
            </div>
            <div class="col-6 mt-5">
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
            <div class="col-4 mx-auto mt-5">
                <h2 class="text-center text-light"><b>¿Qué te ofrecemos?</b></h2>
                <hr class="underline">
            </div>
        </div>
        <div class="row">
            <div class="col-3 mt-5 mx-auto">
               <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-book-bookmark me-3"></i>   Programas de desarrollo</h3>
                    <p class="text-justify text-light">Ofrecemos programas de capacitación adaptados a tus necesidades individuales, un plan de desarrollo profesional personalizado y oportunidades de mentoría para tu crecimiento profesional.</p>
               </div>
            </div>
            <div class="col-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-mug-hot me-3"></i>   SmartWorking</h3>
                    <p class="text-justify text-light">SmartWorking es la piedra angular de nuestra cultura laboral, permitiendo un enfoque flexible que potencia la productividad y el equilibrio entre la vida laboral y personal.</p>
                </div>    
            </div>
            <div class="col-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-money-bills me-3"></i>   Salario Competitivo</h3>
                    <p class="text-justify text-light">Ofrecemos un salario competitivo junto con un plan de retribución flexible, adaptado a las necesidades y preferencias individuales de cada empleado.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-people-arrows  me-3"></i>   Cultura Empresarial</h3>
                    <p class="text-justify text-light">
                        La cultura en nuestra organización se caracteriza por ser dinámica y colaborativa, donde se fomenta la igualdad de oportunidades y se promueven sólidos valores que guían nuestras acciones y decisiones.</p>
                </div>
            </div>
            <div class="col-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-briefcase me-3"></i>   Royal Tech & You</h3>
                    <p class="text-justify text-light">Nuestro programa de planes de carrera diseñado para impulsar el crecimiento profesional de nuestros colaboradores, ofreciendo oportunidades de desarrollo personalizado y crecimiento dentro de la organización.</p>
                </div>
            </div>
            <div class="col-3 mt-5 mx-auto">
                <div class="beneficios">
                    <h3 class="text-center text-light"><i class="fa-solid fa-handshake-angle me-3"></i>   Impacto en la sociedad</h3>
                    <p class="text-justify text-light">
                        Nuestra empresa, comprometida con la responsabilidad social, ofrece oportunidades de voluntariado, promueve la RSC y organiza eventos solidarios para contribuir al bienestar comunitario.</p>
                </div>
            </div>
        </div>
        
    </div>
@endsection