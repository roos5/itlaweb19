<?php
/*Un script que muestre la url actual.*/
$host= $_SERVER["HTTP_HOST"]; //Funcion o codigo para obtener la url actual
$url= $_SERVER["REQUEST_URI"]; //url relativa
echo "http://" . $host . $url;
?>