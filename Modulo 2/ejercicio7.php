<?php 
/*Un script que muestre la IP del cliente, la IP del servidor y el nombre del fichero que se está ejecutando.*/

echo $_SERVER["REMOTE_ADDR"];
echo "\</br>";
echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
echo "<br/>";
echo $_SERVER['SERVER_ADDR'];
?>