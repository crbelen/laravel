<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>MI WEB DE VOTACIONES</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <!-- barra de navegacion-->
    <nav class="navbar bg-body-tertiary">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">MI WEB DE VOTACIONES</font></font></span>
        <!-- incluyo en la barra de navegacion el enlace a la ruta de crear proyecto -->
        <a href="{{ route('proyecto') }}">CREAR PROYECTO</a>
    
          
        <!-- enlaces de navegación-->
            <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Activo</font></font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enlace</font></font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enlace</font></font></a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Desactivado</font></font></a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- contenido grid-->
    <div class="container">
        
        
            <div class="row g-6"><!-- espacio entre filas-->
                <div class="row row-cols-1 row-cols-md-3 g-4"><!--en pantallas medianas y grandes tres columnas en el grid-->
                   
                    <!--iniciamos un bucle que recorre la colección de proyectos-->
                    @foreach ($proyectos as $proyecto)
                    <div class="proyecto"><!--creo un contenedor con la clase proyecto-->
                        <div class="col">
                            <div class="card">
                                <img src="imagen1.jpg" class="card-img-top" alt="Imagen 1">
                                <div class="card-body">
                                    <h5 class="card-title"> {{$proyecto->nombre_proyecto}} </h5>
                                    <p class="card-text">Vota por este proyecto!</p>
                                    <!-- agrego un un formulario que realiza una solicitud POST a la ruta votar y pasa el ID del proyecto como parte de la URL-->
                                    <form method="POST" action="{{ route('proyecto.votar', ['proyecto'=>$proyecto->id])}}">
                                        @csrf
                                        <button type="submit">Votar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        
    </div>
  </body>
</html>
