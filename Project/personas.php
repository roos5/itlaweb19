<?php
	include('class/Conection.php');
	include('class/Personas.php');

	$persona = new Personas();

	if(!empty($_POST)){
		$persona->tipo = $_POST['tipo'];
		$persona->nombre = $_POST['persona'];
		$message = $persona->agregarPersona();
	}
?>
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
  <h1 class="mt-4">Registrar Persona</h1>
	<br/>
	<br/>
	<?php 
		if(isset($message)){
			
			if($message){
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Persona agregada correctamente.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>';
			}else{
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Hubo un error :(
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>';
			}
			
		}
	?>
	<form action="" method="post">

  <div class="form-group">
    <label for="persona">Nombre Persona</label>
    <input type="text" class="form-control" name="persona" id="persona" placeholder="Nombre Persona">
  </div>
		<div class="form-group">
			<label for="docente">Tipo Persona</label>
<select class="form-control" name="tipo">
      <option value="1">Rector</option>
      <option value="2">Docente</option>
      <option value="3">Estudiante</option>
      <option value="4"> Tutor</option>
    </select>
			</div>
		
  <button type="submit" class="btn btn-primary">Crear Materia</button>
</form>
	
</div>
	<script   src="https://code.jquery.com/jquery-3.4.1.min.js"   integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="   crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>