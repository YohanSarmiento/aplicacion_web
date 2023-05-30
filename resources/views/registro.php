<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<h1>Congreso nacional de Ciberseguridad 2023</h1>

<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Inscripciones</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="acerca">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tematicas">Tematicas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="conferencistas">Conferencistas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registro">Registro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="universidades">Universidades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="turismo">Turismo</a>
              </li>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <h4>Estamos en Registro</h4>
    <h2>Registro de asistentes</h2>
    <p>Por favor, complete el siguiente formulario para registrarse en el congreso.</p>
    <form action="" method="GET">
        <label>Nombre y Apellido</label><br>
        <input type="text" name="txtNombre" id="txtNombre" required><br><br>
        <label>Identificación</label><br>
        <select name="lstTipoId" id="lstTipoId">
            <option value="1">Cedula de Ciudadania</option>
            <option value="2">Cedula de extranjeria</option>
            <option value="3">Pasaporte</option>
        </select><br><br>
        <label>Numero de documento</label><br>
        <input type="number" name="txtId" id="txtId" required><br><br>
        <label>Correo electrónico</label><br>
        <input type="email" name="txtCorreo" id="txtCorreo" required><br><br>
        <label>País</label><br>
        <input type="text" name="txtpais" id="txtpais" required><br><br>
        <label>Ciudad</label><br>
        <input type="text" name="txtCiudad" id="txtCiudad" required><br><br>
        <input type="submit" class="btn btn-primary" value="Enviar">
        <input class="btn btn-secondary" type="reset" value="Reset">


    </form><br>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
</body>
</html>