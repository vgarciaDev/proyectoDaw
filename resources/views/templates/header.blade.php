<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid header">
    <div class="d-flex justify-content-between align-items-center w-100 px-0">
      <a class="navbar-brand" href="#"><img class="w-25 ms-3" src="{{ asset('img/Logo.png') }}" alt=""></a>

      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon text-light"></span>
      </button>
    </div>

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
          <a class="link-hover nav-link text-light fs-4 me-4" href="{{ url('/contacto') }}">Contacto</a>
        </li>
      </ul>

      <button class="btn btn-bd-primary me-5 mt-3 mb-3" type="submit">Acceso empleados</button>
    </div>
  </div>
</nav>