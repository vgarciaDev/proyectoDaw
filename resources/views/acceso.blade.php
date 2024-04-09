@extends('templateERP')

@section('title') Area Personal @endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/acceso.css') }}">
@endsection



@section('content')
<div class="contenedor">    
    <div class="mensaje">
        <h2>Recursos Humanos</h2>
        <p>La semana pasada llegamos a ser un total de algo más de <strong>10,000 trabajadores</strong> en toda Europa. Este crecimiento es un reflejo de nuestro compromiso con la expansión y la excelencia en el servicio. Estamos orgullosos de cada miembro de nuestro equipo y valoramos su contribución para hacer de nuestra empresa un líder en el mercado. Continuaremos trabajando juntos para alcanzar nuevas metas y mantener nuestro estándar de calidad.</p>
    </div>
    <div class="mensaje">
        <h2>Recursos Humanos</h2>
        <p>Bienvenido/a a tu área personal. Aquí puedes acceder a una variedad de funciones, incluyendo fichar, solicitar vacaciones, ver nóminas y registrarte en cursos para mejorar tus habilidades y conocimientos.</p>
    </div>
</div>
@endsection

