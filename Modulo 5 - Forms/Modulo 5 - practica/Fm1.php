<?php
/*a)	Realizar ejemplo práctico sobre funcionamiento de formularios, en este caso puede ser un formulario de registro, que contenga informaciones básicas de una persona para registrarse en un sistema.

b)	De igual forma realizar un formulario que valide la existencia de esta información ya anteriormente registrada, como un login.
*/

/*Server side
We recommend using client-side validation, but in case you require server-side validation, you can indicate invalid and valid form fields with .is-invalid and .is-valid. Note that .invalid-feedback is also supported with these classes. */

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];

if(isset($_POST['btn1'])){
include("../cone.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$cone->query("INSERT INTO $tbd0 (nombre, apellido, usuario, pass, mail) values ('$nombre', '$apellido', '$usuario', '$pass', '$mail' )");
 include("../closecone.php");
 echo "Los datos se enviaron correctamente";
}
/*
if(isset($_GET['nombre'])){
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$usuario = $_GET['usuario'];
$pass = $_GET['pass'];
$mail = $_GET['mail'];

$p= array();
if($nombre == ""){
array_push($p, "Debe llenar este campo");
}
if($pass =="" || strlen($pass) <8) {
array_push($p, "Debe colocar una contrasena");	
}
if($usuario == ""){
array_push($p, "Debe llenar este campo");
}
if($apellido == ""){
array_push($p, "Debe llenar este campo");
}
if($mail== "" || stripos($mail, "@") ===false){
array_push($p, " Debe ingresar un correo valido");
}
if(count($p) >0){
echo "<div class='error'>";
for ($i = 0; $i < count($p); $i++){
echo "<li>".$p[$i]."</i>";
}
}
else{
echo "<div class='correcto' Datos correctos";
}
echo "</div>";
}
*/

?>