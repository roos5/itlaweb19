<?php
session_start();
?>

<?php

include 'conexion.php';

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM $tbl_name WHERE nombre_usuario = '$username'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {     }
	
 
  $row = $result->fetch_array(MYSQLI_ASSOC);
if ($password==$row['password']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);//Esto te sacara en 5 minutos.

    echo "Saludos! " . $_SESSION['username'];
    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
    header('Location: http://localhost/htdocs/codes2/modulo5/panel-control.php');

 } else { 
   echo "Usuario o Contrasena incorrectos.";

   echo "<br><a href='login.html'>Vuelva a intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>