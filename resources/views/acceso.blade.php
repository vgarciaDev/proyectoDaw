<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona de Usuario</title>
    <link href="css/acceso.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/768e9ae614.js" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container-fluid fs-5">
    <!--inicio contenedor general-->
    <div class="row">

        <div class="container text-center topbar">

            <img class="img-logo" src="{{ asset('img/Logo.png') }}" alt="Imagen">

        </div>

        <div class="container mt-4 text-center">
        <div class="row mt-2">
            <div class="col-md-6 mx-auto">

                <form  id="contact">
                    <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" v-model="form.nombre">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" v-model="form.pass">
                    </div>

                    <br>
                    <button type="button" @click="submit" class="btn btn-bd-primary mb-5">Acceder</button>
                </form>

            </div>
        </div>
    </div>
                
    </div>
</div>

    <!--fin contenedor general-->


</body>
</html>