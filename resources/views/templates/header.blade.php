<div class="container-fluid header">
  <nav class="navbar navbar-expand-lg navbar-light  ">
      <a class="navbar-brand" href="{{ url('/') }}"><img class="w-25 ms-3" src="{{ asset('img/Logo.png') }}" alt=""></a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="link-hover nav-link text-light fs-4 ms-2" aria-current="page" href="{{ url('/') }}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="link-hover nav-link text-light fs-4 ms-2" href="{{ url('/nuestroTrabajo') }}">Nuestro Trabajo</a>
          </li>
          <li class="nav-item">
            <a class="link-hover nav-link text-light fs-4 ms-2" href="{{ url('/talento') }}">Talento</a>
          </li>
          <li class="nav-item">
            <a class="link-hover nav-link text-light fs-4 ms-2 me-5" href="{{ url('/contacto') }}">Contacto</a>
          </li>
          <li class="nav-item ms-2 me-3">


            <a href="{{ url('/login') }}"><button class="btn btn-bd-primary mt-2 " >Acceso empleados</button></a>

          </li>
        </ul>
      </div>
  </nav>
</div>

