@extends('templates.template')

@section('title') Nuestro Trabajo @endsection

@section('css')

<link rel="stylesheet" href="{{ asset('css/trabajo.css') }}">
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

@endsection

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 fade-in"> 
                <img class="img-tech" src="{{ asset('img/inicio/Cabecera-nuestro-trabajo.jpg') }}" alt="Imagen">   
            </div>
            <div class="col-md-6 mt-7">
                <h2 class="text-center"><b>Tecnología con Excelencia:<br><span style="color: #00FEFB;">El Legado de Royal Tech</span></b></h2>
                <hr class="underline">
                <p class="texto-comun">En el vertiginoso mundo de la tecnología,
                    donde la innovación es la moneda de cambio y <strong>la creatividad es la fuerza motriz</strong>,
                    surge una empresa que destaca por encima de todas: Royal Tech. <strong>Fundada con una visión clara y audaz</strong>,
                    esta empresa se ha convertido en un faro de progreso y excelencia en el campo de la tecnología.
                </p>
                
                <p class="texto-comun"><strong>Royal Tech</strong> ha reunido a algunos de los mejores talentos en ingeniería,
                    diseño y desarrollo de software para crear <strong>productos</strong> que no solo <strong>satisfacen las necesidades del presente</strong>,
                    sino que también anticipan <strong>las demandas del futuro.</strong> Desde dispositivos electrónicos de consumo
                    hasta soluciones empresariales de vanguardia, Royal Tech se dedica a superar los límites de lo que es posible.
                </p>

                <button class="btn btn-bd-primary mt-2 ">Saber más</button>
            </div>
        </div>
    </div>
        <!--SECCIÓN PROYECTOS-->
    <div style="margin-top:100px;">
        <div class="container text-center">

            <!--SECCIÓN 2-->
        <div style="margin-top:100px;">
            <div class="container text-center">
                <div class="row mb-4">

                    <div class="col sombra" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/santander.png">
                        <h3 class="text-start">Santander</h3>
                        <p class="text-start"><strong>Banco Santander</strong> es uno de los bancos más grandes del mundo, con sede en España
                            y una presencia significativa en América, Europa y otros continentes.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col sombra" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/unicaja.png">
                        <h3 class="text-start">Unicaja Banco</h3>
                        <p class="text-start">Unicaja es una <strong>entidad financiera con sede en Málaga</strong>, España, y es
                                            uno de los principales bancos regionales de España.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col sombra" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/ikea.png">
                        <h3 class="text-start">Ikea</h3>
                        <p class="text-start">IKEA es una empresa multinacional sueca, conocida principalmente por su negocio minorista
                                            de muebles y artículos para el hogar a precios accesibles.</p>
                        <button class="btn btn-bd-primary mt-2">Saber más</button>
                    </div>

                    <hr class="underline-2">

                    <div class="col sombra" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/movistar.png">
                        <h3 class="text-start">Movistar</h3>
                        <p class="text-start">Movistar es una de las principales empresas de telecomunicaciones a nivel mundial,
                                            con una fuerte presencia en España y en varios países de América Latina.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col sombra" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/bank.png">
                        <h3 class="text-start">Towerbank</h3>
                        <p class="text-start">Es posible que sea una entidad financiera regional o localizada en una región
                                            específica que no esté ampliamente reconocida a nivel internacional o que haya surgido después de esa fecha.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col sombra" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/teleflex.png">
                        <h3 class="text-start">Teleflex</h3>
                        <p class="text-start">Teleflex es una empresa estadounidense que se especializa en la fabricación y suministro de
                                            productos médicos y tecnologías para el sector de la salud.</p>
                        <button class="btn btn-bd-primary mt-2">Saber más</button>
                    </div>

            </div>
        </div>
    </div>


    
@endsection