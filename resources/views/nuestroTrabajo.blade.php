@extends('templates.template')

@section('title') Nuestro Trabajo @endsection

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

                    <div class="col" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/proyecto-santander.jpg">
                        <h3 class="text-start">Proyecto Santander</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipiscing elit molestie at lobortis, cum nullam sapien volutpat.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/unicaja-proyecto.jpg">
                        <h3 class="text-start">Unicaja Banco</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipiscing elit molestie at lobortis, cum nullam sapien volutpat.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/ikea-proyecto.jpg">
                        <h3 class="text-start">Ikea</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipiscing elit molestie at lobortis, cum nullam sapien volutpat.</p>
                        <button class="btn btn-bd-primary mt-2">Saber más</button>
                    </div>

                    <hr class="underline-2">

                    <div class="col" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/movistar-proyecto.jpg">
                        <h3 class="text-start">Movistar</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipiscing elit molestie at lobortis, cum nullam sapien volutpat.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/bank.jpg">
                        <h3 class="text-start">Towerbank</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipiscing elit molestie at lobortis, cum nullam sapien volutpat.</p>
                        <button class="btn btn-bd-primary mt-2 ">Saber más</button>
                    </div>

                    <div class="col" style="width: 30%;">
                        <img style="width: 100%;" src="img/inicio/teleflex-proyecto.jpg">
                        <h3 class="text-start">Teleflex</h3>
                        <p class="text-start">Lorem ipsum dolor sit amet consectetur, adipiscing elit molestie at lobortis, cum nullam sapien volutpat.</p>
                        <button class="btn btn-bd-primary mt-2">Saber más</button>
                    </div>

            </div>
        </div>
    </div>


    
@endsection