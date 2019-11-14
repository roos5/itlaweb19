<?php
$n = $_POST["nombre"];
$p = $_POST["peso"];
$e = $_POST["edad"];
echo " Aqui estan mis datos personales:";
echo "</br>";
echo "nombre: $n";
echo "</br>";
echo "peso: $p";
echo "</br>";
echo "edad: $e";
?>

<!DOCTYPE html>
<html>
<head>
<title> Página web que permita insertar un dato ya sea nombre de usuario, apellido, números, lo que sea (cualquier tipo de cadena de texto), estos datos los inserte en un array y permita visualizar los valores insertados.</title>
<body>	
<form action="http://localhost/codes/ejercicio4.php" method="post">
<p> Inserte nombre: <input type="text" name="nombre" /></p>
<p> Inserte su peso <input type="text" name="peso"/></p>
<p> insterte su edad <input type="text" name="edad"/></p>
<p> <input type="submit"/></p>
</form>
</body>
</head>
</html>

