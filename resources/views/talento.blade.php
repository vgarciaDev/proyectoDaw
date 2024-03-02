@extends('templates.template')

@section('title') Talento @endsection

@section('content')
    <div class="container mt-4">
        <div class="row mt-5">
            <div class="col-6"> 
                <img class="img-tech" src="{{ asset('img/imagen-tech.png') }}" alt="Imagen">   
            </div>
            <div class="col-6 mt-5">
                <h2 class="text-center"><b>¿Quieres trabajar para Royal Tech?</b></h2>
                <hr class="underline">
                <h2 class="text-justify-h2 mt-5">Creemos en la capacidad y potencial del talento para forjar un mañana más prometedor tanto 
                    para individuos como para empresas en todo el mundo. En Royal Tech, trabajamos para impulsar oportunidades significativas 
                    mediante el uso innovador de la tecnología.</h2>
            </div>
        </div>
    </div>
@endsection