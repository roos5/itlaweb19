<?php
	include('class/Conection.php');
	include('class/Personas.php');
	include('class/Materias.php');

	$persona = new Personas();
	$materia = new Materias();

	if(!empty($_POST)){
		$materia->materia = $_POST['materia'];
		$materia->id_docente = $_POST['docente'];
		$message = $materia->agregarMateria();
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
          <a class="nav-link" href="#">Materias</a>
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
  <h1 class="mt-4">Registrar Materias</h1>
	<br/>
	<br/>
	<?php 
		if(isset($message)){
			
			if($message){
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
					  Materia agregada correctamente.
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
    <label for="materia">Nombre de la Materia</label>
    <input type="text" class="form-control" name="materia" id="materia" aria-describedby="emailHelp" placeholder="Inserte una Materia">
  </div>
		<div class="form-group">
			<label for="docente">Docente</label>
<select class="form-control" name="docente">
	<option value="">Docente</option>
    <?php 
		$result = $persona->personas(2);
		while($fila = $result->fetch_assoc()){
			echo '<option value="'.$fila["id"].'">'.$fila["nombre_persona"].'</option>';
		}
	?>
    </select>
			</div>
		
  <button type="submit" class="btn btn-primary">Crear Materia</button>
</form>
	
</div>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>