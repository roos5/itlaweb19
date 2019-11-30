<?php
$servidor = "localhost"; //servidor
$bd = "formulario"; // base de datos
$ubd = "form"; // usuario base de datos
$pwbd = "12345678"; //contrasena
$tbd0 = "usuarios"; //tabla de usuarios

error_reporting(0);
$cone = new MySQLi($servidor, $ubd, $pwbd, $bd);

if($cone->connect_errno) {
	
	echo "Estamos bajo mantenimiento, disculpe los inconvenientes causados";
	exit();
}


?>