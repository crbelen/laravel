<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>CREA NUEVO PROYECTO</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <form method="POST" action="{{ route('crear') }}">
        @csrf
        <label for="nombre_proyecto">Nombre del proyecto:</label>
        <input type="text" name="nombre_proyecto" required>

        <button type="submit">Crear Proyecto</button>
    </form>
    


  </body>
</html>