@extends('templates.template')

@section('title') Nuestro Trabajo @endsection

@section('css')

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
            <div class="row proyectos">
                <div class="col">
                    <img src="img/inicio/proyecto-santander.jpg">
                    <h3 class="tit-pro">Proyecto Santander</h3>
                </div>
                <div class="col">
                    <img src="img/inicio/proyecto-santander.jpg">
                </div>
            </div>
        </div>
    </div>


    
@endsection