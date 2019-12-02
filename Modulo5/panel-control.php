<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
   echo "Debes iniciar sesion para ver el contenido.<br>";
   echo "<br><a href='login.html'>Login</a>";
   echo "<br><br><a href='index.html'>Registrarme</a>";
   header('Location: http://localhost/htdocs/codes2/modulo5/login.html');
exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
header('Location: http://localhost/htdocs/codes2/modulo5/login.html');
echo "Tu sesion a expirado,
<a href='login.html'>Inicia Sesion</a>";
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css"> 
  a:link 
  { 
  text-decoration:none; 
  } 
  </style>

</head>
<body>

<div class="jumbotron text-center">
  <h1>Bienvenido <?php echo  $_SESSION['username'];?></h1>
  <p>Recuerda mantener tu perfil actualizado</p> 
  <a href=logout.php><button type="button" class="btn btn-success"> Salir</button></a>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <a href=""><h3>Sobre Mi</h3></a>
      <p>No se que poner aqui</p>
      <p>Aqui tampoco</p>
    </div>
    <div class="col-sm-4">
      <a href=""><h3>Ajustes</h3></a>
      <p>texto texto texto</p>
    </div>
    <div class="col-sm-4">
      <a href=""><h3>Editar Perfil</h3></a>
      <p>Lo siento teacher, no estaba en escribir jejejeje</p>
    </div>
  </div>

</div>

</body>
</html>