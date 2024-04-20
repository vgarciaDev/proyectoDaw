@extends('templateERPRRHH')

@section('title') Empleados @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/empleados.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
@endsection
@section('content')    
    <div class="container mt-5">
        <div class="row mt-5">
            <h2>Candidatos</h2>
            <div class="col-md-6 mt-5">
                <a  href="{{ route('verOfertas') }}"><button  class="seccion pb-3"><i class="fa-solid fa-clock" id="fichaje"></i> Ofertas de empleo</button></a>
            </div>
            <div class="col-md-6 mt-5">
                <a  href="{{ route('buscarCandidatos') }}"><button  class="seccion pb-3"><i class="fa-solid fa-clock" id="fichaje"></i> Búsqueda de talento</button></a>
            </div>
           
        </div>
    </div>
    
@endsection
