<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciberseguridad 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    
</head>
<body>
    <h1>Congreso nacional de Ciberseguridad 2023</h1>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="registro">Inscripciones</a>
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
      <div class="container-fluid">

        <img src="{{ asset('/assets/images/Ciberseguridad.jpg') }}" alt="Mi imagen" class="img-ciber">

      </div>       
      <div class="container">
        <div class="row" >
          <div class="col">
            <h4>06 y 07 de Octubre</h4>
            <h5>Conoce lo más actual</h5>
            <p>
            Descubre lo más actual en seguridad de la información con grandes profesionistas en el ámbito.
            No te pierdas por igual todos los talleres que tenemos preparados para tí.
            </p>

          </div>
          <div class="col">
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                  <div class="card-header">Ponencias</div>
                  <div class="card-body text-primary">
                    <p class="card-text">Conoce lo más actual de las expertas y expertos en seguridad</p>
                  </div>
            </div>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                  <div class="card-header">Foros</div>
                  <div class="card-body text-secondary">
                    <p class="card-text">Conoce los puntos de vista de los mejores expertos en el tema</p>
                  </div>
            </div>

          </div>
          <div class="col">
            <div class="card border-success mb-3" style="max-width: 18rem;">
                  <div class="card-header">Talleres</div>
                  <div class="card-body">
                    <p class="card-text">Aprende con los talleres que tenemos preparados para tí.</p>
                  </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                  <div class="card-header">Conferencias</div>
                  <div class="card-body">
                    <p class="card-text">Disfruta de todas las conferencias que aportaran grande conocimiento para tu profesión.</p>
                  </div>
            </div>


          </div>


          </div>


          </div>
        

        </div>

      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>        
</body>

</html>