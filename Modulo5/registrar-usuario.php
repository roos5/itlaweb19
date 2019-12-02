
<?php

 include 'conexion.php';
 
 $form_pass = $_POST['password'];
 
 
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

 if ($conexion->connect_error) {
 die("Algo salio mal con la coneccion: " . $conexion->connect_error);
}

 $buscarUsuario = "SELECT * FROM $tbl_name
 WHERE nombre_usuario = '$_POST[username]' ";

 $result = $conexion->query($buscarUsuario);

 $count = mysqli_num_rows($result);

 if ($count == 1) {
 echo "<br />". "Este usuario ya existe, prueba con otro" . "<br />";

 echo "<a href='index.html'>Por favor elegir otro nombre</a>";
 }
 else{

 $query = "INSERT INTO usuarios (nombre_usuario, password) VALUES ('$_POST[username]', '$form_pass')"; //Nose porque me da error aqui :/

 if ($conexion->query($query) === TRUE) {
 echo "<br />" . "<h1>" . "Gracias!" . "</h1>";
 echo "<h3>" . "Saludos: " . $_POST['username'] . "</h3>" . "\n\n";
 echo "<h3>" . "Iniciar Sesion: " . "<a href='login.html'>Login</a>" . "</h3>"; 
 }

 else {
 echo "Algo salio mal con el usuario." . $query . "<br>" . $conexion->error; 
   }
 }
 mysqli_close($conexion);
?>
