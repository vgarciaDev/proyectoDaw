@extends('templates.template')

@section('title') Inicio @endsection

@section('content')
<div>
    <div class="row imagenFondo">
        <h4 class="imagenFondoH4">Cambia tu mundo con nosotros</h4>
        {{-- <img src="{{ asset('img/inicio/inicio_03.jpg') }}" class="img-fluid w-100"  alt="inicio_01"> --}}
    </div>
</div>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-1">            
        </div>
        <div class="col-3 m-auto">
            <img src="{{ asset('img/inicio/inicio_12.jpg') }}" class="w-100 m-auto imgRounded">
        </div>
        
        <div class="col-7">
            <h4 class="text-justify mt-5 w-100 m-auto p-4 mb-4">En un mundo donde la tecnología evoluciona a un ritmo vertiginoso, las empresas se 
                enfrentan a desafíos cada vez más complejos para mantenerse competitivas y adaptarse a las demandas del mercado. En este contexto, 
                la consultoría en tecnologías de la información ROYAL TECH se convierte en un aliado indispensable para impulsar la innovación, 
                optimizar procesos y maximizar el rendimiento empresarial.
            <br>
                ROYAL TECH, líder en consultoría de TI, se enorgullece de ofrecer soluciones integrales y personalizadas que ayudan a las 
                organizaciones a alcanzar sus objetivos estratégicos. Con una vasta experiencia y un equipo multidisciplinario de expertos, 
                nos dedicamos a brindar asesoramiento especializado en una amplia gama de áreas, desde la planificación y ejecución de proyectos 
                hasta la gestión de riesgos y la optimización de infraestructuras tecnológicas.
            </h4>            
        </div>
        <div class="col-1">            
        </div>
    </div>

    
    
        
    <div class="row row-cols-2 justify-content-center mb-4 fade-in float-sm-end" id="texto">
        <div class="row" id="imagenJS">
            {{-- <img src="{{ asset('img/inicio/inicio_04.jpg') }}" class="img-fluid img-thumbnail" alt="Imagen 1" > --}}
        </div>
        <div class="row ms-4" id="textoJS">                
            <h3 id="textoJSH3"></h3>
            <hr id="hrDisplay" class="underline">
            <h5 id="textoJSH5"></h5>
        </div> 
    </div>
    <div class="row">
        <div class="col-3" id="pic1">
            <a href="javascript:void(0)"><img src="{{ asset('img/inicio/inicio_05.jpg') }}" class="img-fluid img-thumbnail" alt="Imagen 1" onclick="mostrarTexto('pic1')"></a>
        </div>
        <div class="col-3" id="pic2">
            <a href="javascript:void(0)"><img src="{{ asset('img/inicio/inicio_06.jpg') }}" class="img-fluid img-thumbnail" alt="Imagen 1" onclick="mostrarTexto('pic2')"></a>        
        </div>
        <div class="col-3" id="pic3">
            <a href="javascript:void(0)"><img src="{{ asset('img/inicio/inicio_07.jpg') }}" class="img-fluid img-thumbnail" alt="Imagen 1" onclick="mostrarTexto('pic3')"></a>        
        </div>
        <div class="col-3" id="pic4">
            <a href="javascript:void(0)"><img src="{{ asset('img/inicio/inicio_08.jpg') }}" class="img-fluid img-thumbnail" alt="Imagen 1" onclick="mostrarTexto('pic4')"></a>        
        </div>
    </div>
    

    <div class="row">
        <div class="col-8">
            <h4 class="justify-content-end mt-5 w-75 m-auto p-4 mb-4">    
                Nuestro enfoque se centra en comprender las necesidades únicas de cada cliente y diseñar soluciones innovadoras que impulsen su 
                crecimiento y éxito a largo plazo. Ya sea que se trate de implementar nuevas tecnologías, mejorar la eficiencia operativa o 
                garantizar la seguridad de los datos, estamos comprometidos a proporcionar servicios de la más alta calidad que agreguen valor 
                tangible a su negocio.
            <br> 
                En ROYAL TECH, nos apasiona la tecnología y creemos en su poder para transformar el mundo. Nos esforzamos por estar a la vanguardia 
                de las últimas tendencias y desarrollos en el campo de la TI, para ofrecer a nuestros clientes soluciones innovadoras y adaptadas a 
                los desafíos del futuro.
            </h4>
        </div>
        <div class="col-3 m-auto">
            <img src="{{ asset('img/inicio/inicio_11.jpg') }}" class="w-100 m-auto imgRounded">
        </div>
        <div class="col-1">            
        </div>
    </div>
    
  

</div>
<script>
    const arrayTexto = ["Consultoría en Estrategia Tecnológica:",
        "Esta área se centra en ayudar a las empresas a alinear su estrategia de negocios con su infraestructura tecnológica. Los consultores en estrategia tecnológica trabajan con los líderes empresariales para identificar oportunidades de mejora y desarrollar planes estratégicos para implementar nuevas tecnologías que impulsen el crecimiento y la eficiencia operativa. Esto puede incluir la evaluación de sistemas existentes, la identificación de áreas de mejora, la selección de nuevas soluciones tecnológicas y la elaboración de hojas de ruta para su implementación.",
        "Consultoría en Transformación Digital:",
        "La transformación digital es un proceso clave para muchas empresas en la actualidad. Los consultores en este campo ayudan a las organizaciones a adaptarse a los cambios tecnológicos y culturales necesarios para aprovechar al máximo las nuevas oportunidades digitales. Esto puede implicar la redefinición de modelos de negocio, la implementación de nuevas tecnologías como la inteligencia artificial o el Internet de las cosas (IoT), y la capacitación de empleados para trabajar de manera más eficaz en un entorno digital.",
        "Consultoría en Ciberseguridad:",
        "La seguridad de la información es una preocupación fundamental para todas las empresas en la era digital. Los consultores en ciberseguridad ayudan a las organizaciones a proteger sus datos y sistemas contra amenazas internas y externas. Esto puede incluir la evaluación de riesgos, el desarrollo de políticas y procedimientos de seguridad, la implementación de soluciones de seguridad tecnológica (como firewalls y sistemas de detección de intrusiones) y la capacitación de empleados en prácticas de seguridad informática.",
        "Consultoría en Gestión de Proyectos y Procesos:",
        "Esta área se centra en ayudar a las empresas a gestionar de manera eficiente sus proyectos y procesos tecnológicos. Los consultores en gestión de proyectos y procesos trabajan con equipos internos para planificar, ejecutar y controlar proyectos de TI, asegurando que se entreguen a tiempo y dentro del presupuesto. Esto puede incluir la implementación de metodologías de gestión de proyectos como Scrum o Kanban, la identificación y mitigación de riesgos, y la optimización de procesos para mejorar la eficiencia y la calidad del trabajo."
    ];
    
    const nuevaImagen = document.createElement("img");
    const textoJS = document.getElementById("textoJS");
    const textoJSH3 = document.getElementById("textoJSH3");
    const textoJSH5 = document.getElementById("textoJSH5");
    const imagenJS = document.getElementById("imagenJS");
    const hrDisplay = document.getElementById("hrDisplay");
    const pic1 = document.getElementById("pic1");
    const pic2 = document.getElementById("pic2");
    const pic3 = document.getElementById("pic3");
    const pic4 = document.getElementById("pic4");
    hrDisplay.style.display = "none";
    let anchoPantalla = window.innerWidth;
    let ancho = '';

    function mostrarTexto(idImagen) {
        anchoPantalla = window.innerWidth;
        console.log(idImagen);
        if(anchoPantalla>700){
            ancho = 'w-25'
        }else{
            ancho = 'w-100';
        }
        switch (idImagen){
            case 'pic1':
                textoJSH3.textContent = arrayTexto[0];
                hrDisplay.style.display = "block";
                textoJSH5.textContent = arrayTexto[1];  
                nuevaImagen.src = "{{ asset('img/inicio/inicio_05.jpg') }}";
                nuevaImagen.classList.add("img-fluid", "img-thumbnail", "fade-in");
                imagenJS.classList.add(ancho);
                imagenJS.appendChild(nuevaImagen);
                pic1.style.opacity = "0.2";
                pic2.style.opacity = "1";
                pic3.style.opacity = "1";
                pic4.style.opacity = "1";
                break;
            case 'pic2':     
                textoJSH3.textContent = arrayTexto[2];
                hrDisplay.style.display = "block";
                textoJSH5.textContent = arrayTexto[3];  
                nuevaImagen.src = "{{ asset('img/inicio/inicio_06.jpg') }}";
                nuevaImagen.classList.add("img-fluid", "img-thumbnail", "fade-in");
                imagenJS.classList.add(ancho);
                imagenJS.appendChild(nuevaImagen);                
                pic1.style.opacity = "1";
                pic2.style.opacity = "0.2";
                pic3.style.opacity = "1";
                pic4.style.opacity = "1";
                break;
            case 'pic3':     
                textoJSH3.textContent = arrayTexto[4];
                hrDisplay.style.display = "block";
                textoJSH5.textContent = arrayTexto[5];  
                nuevaImagen.src = "{{ asset('img/inicio/inicio_07.jpg') }}";
                nuevaImagen.classList.add("img-fluid", "img-thumbnail", "fade-in");
                imagenJS.classList.add(ancho);
                imagenJS.appendChild(nuevaImagen);
                pic1.style.opacity = "1";
                pic2.style.opacity = "1";
                pic3.style.opacity = "0.2";
                pic4.style.opacity = "1";
                break;
            case 'pic4':     
                textoJSH3.textContent = arrayTexto[6];
                hrDisplay.style.display = "block";
                textoJSH5.textContent = arrayTexto[7];  
                nuevaImagen.src = "{{ asset('img/inicio/inicio_08.jpg') }}";
                nuevaImagen.classList.add("img-fluid", "img-thumbnail", "fade-in");
                imagenJS.classList.add(ancho);
                imagenJS.appendChild(nuevaImagen);
                pic1.style.opacity = "1";
                pic2.style.opacity = "1";
                pic3.style.opacity = "1";
                pic4.style.opacity = "0.2";
                break;
            default:
                imagenJS.classList.remove(ancho);
                imagenJS.classList.add(ancho);
        }
    }
    function responsive(){
        anchoPantalla = window.innerWidth;
        if(anchoPantalla>1500){
            ancho = 'w-25'
        }else{
            ancho = 'w-75';
        }
        imagenJS.classList.remove("w-50");
        imagenJS.classList.remove("w-75");
        imagenJS.classList.add(ancho);
    }
    
    window.addEventListener("resize", responsive); 

    mostrarTexto('pic1');
</script>
@endsection