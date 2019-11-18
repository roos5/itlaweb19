<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href="css/bootstrap.min.css" />
<link rel='stylesheet' href="css/bootstrap-grid.css" />
	
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
<title>Escuala Online</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
          <img src="http://placehold.it/150x50?text=Logo" alt=""> <span style="margin-left: 10px;">Escuela Online</span>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Escuelas
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="personas.php">Personas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="materias.php">Materias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Grupos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">
  <h1 class="mt-4">Registrar Escuela</h1>
	<br/>
	<br/>

	<form>
<div class="form-group">
    <label for="escuela">Nombre de la Escuela</label>
    <input type="email" class="form-control" name="escuela" id="escuela" aria-describedby="emailHelp" placeholder="Nombre de la Escuela">
  </div>
  <div class="form-group">
    <label for="director">Director</label>
    <input type="email" class="form-control" name="director" id="director" aria-describedby="emailHelp" placeholder="Director">
  </div>

  <button type="submit" class="btn btn-primary">Crear Escuela</button>
</form>
	
</div>
</body>
</html>