<nav class="navbar navbar-expand-lg bg-body-tertiary" id="app">
  <div class="container-fluid header">
    <div class="row">
      <div class="col-7">
        <a class="navbar-brand" href="#"><img class="w-50 ms-3" src="{{ asset('img/Logo.png') }}" alt=""></a>
      </div>
    </div>
    <div class="col-5">
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ">
            <a class="link-hover nav-link active text-light fs-4 ms-2"  aria-current="page" href="{{ url('/') }}">Inicio</a>
          </li>
          <li class="nav-item ">
            <a class="link-hover nav-link  text-light fs-4 ms-2 "  href="{{ url('/nuestroTrabajo') }}">Nuestro Trabajo</a>
          </li>
          <li class="nav-item">
            <a class="link-hover nav-link text-light fs-4 ms-2"  href="{{ url('/talento') }}">Talento</a>
          </li>
          <li class="nav-item">
            <a class="link-hover nav-link text-light fs-4 ms-2"href="{{ url('/contacto') }}">Contacto</a>
          </li>
        </ul>
          <button class="btn btn-bd-primary me-5" type="submit">Acceso empleados</button>
      </div>
    </div>
  </div>
</nav>

